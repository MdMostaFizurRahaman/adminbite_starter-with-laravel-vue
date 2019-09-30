
window.Vue = require('vue');
import router from './route';


// Vue.component('example-component', require('./views/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router,
});
