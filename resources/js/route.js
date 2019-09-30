import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter);

import Dashboard from './views/Dashboard.vue';
import Category from './views/pages/category/Category.vue';
import Product from './views/pages/product/Product.vue';


const router= new VueRouter({
    mode:'history',
    routes: [{
            path: '/',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/category',
            name: 'category',
            component: Category
        },
        {
            path: '/product',
            name: 'product',
            component: Product
        },
    ],
})


export default router;