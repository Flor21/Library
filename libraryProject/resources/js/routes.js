import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import MySubjects from '@/js/components/MySubjects';
import Login from '@/js/components/Login';
import FrontPage from '@/js/components/FrontPage';
import Search from '@/js/components/Search';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'frontPage',
            component: FrontPage
        },
        {
            path:'/home',
            name: 'home',
            component: Home
        },
        {
            path:'/login',
            name: 'login',
            component: Login
        },
        {
            path:'/mySubjects',
            name: 'mySubjects',
            component: MySubjects
        },
        {
            path:'/search',
            name: 'search',
            component: Search
        }
    ]
});

export default router;