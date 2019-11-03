import Datagrid from "./components/datagrid/Datagrid"
import Actions from "./components/datagrid/Actions"
import Filters from "./components/datagrid/Filters"
import Sorts from "./components/datagrid/Sorts"
import Row from "./components/datagrid/Row"
import VueInternationalization from "vue-i18n"
import Locale from "./vue-i18n-locales.generated"
import * as uiv from 'uiv'

window.Vue = require('vue');

Vue.component('datagrid', Datagrid);
Vue.component('datagrid-actions', Actions);
Vue.component('datagrid-filters', Filters);
Vue.component('datagrid-sorts', Sorts);
Vue.component('datagrid-row', Row);

// Boostrap
Vue.use(uiv);

// Translations
Vue.use(VueInternationalization);
const lang = document.documentElement.lang.substr(0, 2);

const i18n = new VueInternationalization({
    locale: lang,
    messages: Locale
});

const app = new Vue({
    el: '#datagrid',
    i18n
});