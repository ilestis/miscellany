<template>
    <div class="datagrid">
        <div class="datagrid-head">
            <datagrid-filters
                    :filters="filters"
                    :sorts="sorts"
            ></datagrid-filters>
        </div>
        <div class="datagrid-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th v-if="canBulk">
                            <input type="checkbox" v-on:click="checkAll" v-model="allSelected" />
                        </th>
                        <th v-for="field, key in fields">
                            {{ $t(field.text ? field.text : 'crud.fields.' + key)}}
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td v-bind:colspan="fullColspan" class="text-center" v-if="isLoading">
                            <i class="fa fa-spinner fa-spin fa-lg"></i>
                        </td>
                    </tr>
                    <datagrid-row
                        v-for="row in rows"
                        :fields="fields"
                        :row="row"
                        :key="row.id"
                        can-bulk="canBulk"
                    ></datagrid-row>
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>

    </div>
</template>

<script>
    import Event from '../event.js';

    export default {
        name: "Datagrid",
        props: [
            'fields',
            'entity',
            'filters',
            'sorts',
            'bulkUrl',
            'listUrl'
        ],
        data: function() {
            return {
                // Rows of data to be displayed
                rows: [],
                allSelected: false,
                isLoading: true,
            }
        },
        mounted() {
            this.getData(this.listUrl);

            Event.$on('datagrid_apply_filters', (filters) => {
                this.applyFilters(filters);
            });

            Event.$on('datagrid_reset_filters', () => {
                this.resetFilterss();
            });
        },
        computed: {
            canBulk: function() {
                return this.bulkUrl !== null
            },
            fullColspan: function() {
                return Object.keys(this.filters).length + (this.canBulk ? 2 : 0)
            }
        },
        methods: {
            getData: function(url) {
                axios.get(url)
                    .then(response => {
                        this.rows = response.data.data;
                        this.isLoading = false;
                    })
                    .catch(e => {
                        console.error('list', e);
                    });
            },
            checkAll: function() {
                Event.$emit('select_all', !this.allSelected);
            },

            applyFilters: function(filters) {
                this.isLoading = true;
                let filterParams = [];
                for (var filter in filters) {
                    var filterObj = filters[filter];
                    filterParams.push(filter + '=' + (filterObj.value === null ? '' : filterObj.value));
                }

                let url = this.listUrl + '?' + filterParams.join('&') ;
                this.getData(url);

            },

            resetFilters: function() {
                this.isLoading = true;
                let url = this.listUrl + '?reset-filters=true';
                this.getData(url);
            },
        },
    }
</script>