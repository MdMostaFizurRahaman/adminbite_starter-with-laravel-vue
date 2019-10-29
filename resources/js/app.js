require('./bootstrap');
window.Vue = require('vue');
import router from './route';
import Breadcrumb from './views/Breadcrumb.vue';

// Vue.component('example-component', require('./views/ExampleComponent.vue').default);




Vue.filter('capitalize', function (value) {
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
  })


const app = new Vue({
    el: '#app',
    router,
    components: {
       'breadcrumb-component' : Breadcrumb
    }
});
