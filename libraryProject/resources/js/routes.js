import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import MySubjects from '@/js/components/MySubjects';
import Login from '@/js/components/Login';



Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
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
        }
    ]
});

export default router;