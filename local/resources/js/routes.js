import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from './components/Home'
import Product from './components/Product'

const router = new VueRouter({
    mode:'history',
    routes: [
        {
            path: '/pos',
            name: 'home',
            component: Home
        },
        {
            path: '/pos/home',
            name: 'home',
            component: Home
        },
        {
            path: '/pos/product',
            name: 'product',
            component: Product
        },
    ],
});

export default router