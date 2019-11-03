<template>
    <div class="filtering">
        <div class="text-right">
            <dropdown ref="dropdown" class="">
                <div class="btn btn-default dropdown-toggle">
                    {{ $t('crud.actions.sort_by') }} <span class="fa fa-caret-down fa-sm"></span>
                </div>
                <template slot="dropdown">
                    <li><a role="button">Action</a></li>
                    <li><a role="button">Another action</a></li>
                    <li><a role="button">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a role="button">Separated link</a></li>
                </template>
            </dropdown>

            <div class="btn btn-default" @click="toggleFilterForm">
                <i class="fa fa-filter"></i>
                <span class="label label-danger" v-if="activeFilters > 0">{{ activeFilters }}</span>
                <i class="fa fa-caret-down fa-sm"></i>
            </div>
        </div>
        <div class="filters" v-bind:style="{ display: filtering ? '' : 'none'}">
            <div class="row">
                <div v-for="filter, key in filters" class="col-md-6">
                    <div class="form-group">
<!--                        <v-select-->
<!--                                v-if="filter.field === 'entity'"-->
<!--                                @search="fetchOptions"-->
<!--                                v-model="filter.value"-->
<!--                                :id="key"-->
<!--                                :options="filter"-->
<!--                                class="form-control"-->
<!--                        />-->

                        <select
                            v-if="filter.field === 'entity' || filter.field === 'tag'"
                            v-model="filter.value"
                            :id="key"
                            class="form-control select2"
                            v-bind:style="{ width: '100%' }"
                            :data-url="filter.route"
                            :data-placeholder="$t(filter.placeholder ? filter.placeholder : 'crud.placeholders.' + key.replace('_id', ''))"
                        />

                        <select v-else-if="filter.field === 'private'"
                            class="form-control"
                            v-bind:name="key"
                            v-model="filter.value"
                        >
                            <option value="">{{ $t('crud.fields.is_private') }}</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>

                        <input v-else type="text"
                            class="form-control"
                            v-model="filter.value"
                            v-bind:name="key"
                            v-bind:placeholder="$t(filter.text ? filter.text : 'crud.fields.' + key)"
                        />
                    </div>
                </div>
            </div>

            <button class="btn btn-success" @click="applyFilters">
                {{ $t('crud.filter') }}
            </button>
            <button class="btn btn-default" @click="resetFilters">
                <i class="fa fa-times"></i>
                {{ $t('crud.filters.clear') }}
            </button>
        </div>
    </div>
</template>

<script>
    import Event from '../event.js';

    export default {
        name: "Filters",
        props: [
            'filters',
            'sorts'
        ],
        data() {
            return {
                filtering: false,
                activeFilters: 0,
                values: {}
            }
        },
        computed: {
            // activeFilters: function() {
            //     var filters = this.filters;
            //     return Object.keys(filters)
            //         .map(key => filters[key])
            //         .filter(filter => filter.value !== null && filter.value.trim() !== '')
            //         .length;
            // }
        },
        methods: {
            toggleFilterForm: function() {
                this.filtering = !this.filtering;
            },
            applyFilters: function() {
                Event.$emit('datagrid_apply_filters', this.filters);
                this.filtering = false;
                this.countActiveFilters();
            },
            resetFilters: function() {
                Event.$emit('datagrid_reset_filters');
                this.filtering = false;

                Object.keys(this.filters)
                    .forEach(key => {
                        this.filters[key].value = null
                    });

                this.activeFilters = 0;
            },
            countActiveFilters: function() {
                this.activeFilters = 0;
                Object.keys(this.filters)
                    .forEach(key => {
                        let val = this.filters[key].value;
                        if (val !== null && val.trim() !== '') {
                            this.activeFilters++;
                        }
                    });
            },
            fetchOptions: function() {
                // axios.get()
            }
        },
        mounted() {
            this.countActiveFilters();
        }
    }
</script>

<style scoped>

</style>