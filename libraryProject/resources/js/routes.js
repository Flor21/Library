import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '@/js/components/Home';
import MySubjects from '@/js/components/MySubjects';


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
            path:'/mySubjects',
            name: 'mySubjects',
            component: MySubjects
        },
    ]
});

export default router;