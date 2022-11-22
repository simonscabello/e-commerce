import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../vue/views/Home.vue';
import About from '../vue/views/About.vue';
import Products from '../vue/views/Products/Index.vue';
import SingleProduct from '../vue/views/Products/SingleProduct.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/sobre',
            name: 'about',
            component: About
        },
        {
            path: '/produtos',
            name: 'products',
            component: Products,
        },
        {
            path: '/produtos/:id',
            name: 'SingleProduct',
            props: route => ({ id: String(route.params.id) }),
            component: SingleProduct
        }
        
    ]
});

export default router;