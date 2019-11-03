<template>
    <tr>
        <td v-if="canBulk">
            <input type="checkbox" v-on:click="checkRow(row)" name="model[]" v-model="selected" />
        </td>
        <td v-for="field, key in fields">
            <div v-if="field.field === 'image'"
                 class="entity-image"
                 v-bind:style="{ backgroundImage: 'url(' + row[key] + ')' }">
            </div>
            <div v-else-if="field.field === 'entity'">
                <a v-bind:href="row[key].viewUrl" v-if="row[key]">
<!--                    <div class="entity-image" v-if="row[key].image"-->
<!--                         v-bind:style="{ backgroundImage: 'url(' + row[key].image + ')' }">-->
<!--                    </div>-->
                    {{ row[key].name }}
                </a>
            </div>
            <div v-else-if="field.field === 'private'">
                <i class="fa fa-lock" v-if="row[key]" v-bind:title="$t('crud.is_private')"></i>
            </div>
            <div v-else-if="field.field === 'name'">
                <a v-bind:href="row[key].viewUrl">
                    {{ row[key] }}
                </a>
            </div>
            <div v-else>
                {{ render(key, field) }}
            </div>
        </td>
        <td>
            <a v-bind:href="row.viewUrl">
                <i class="fa fa-eye" v-bind:title="$t('crud.create')"></i>
            </a>
            <a v-bind:href="row.editUrl" v-if="row.editUrl">
                <i class="fa fa-edit" v-bind:title="$t('crud.edit')"></i>
            </a>
        </td>
    </tr>
</template>

<script>
    import Event from '../event.js';

    export default {
        name: "Row",
        props: [
            'row',
            'fields',
            'canBulk'
        ],
        data: function() {
            return {
                selected: false
            }
        },
        mounted() {
            Event.$on('select_all', (selected) => {
                this.selected = selected;
            })
        },
        methods: {
            render: function(key, field) {
                if (field.field && field.field === 'image') {
                    return 'img';
                }
                return this.row[key];
            },
            checkRow: function(model) {

            }
        },
    }
</script>