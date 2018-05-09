import Vue from 'vue'
import VueRouter from 'vue-router' 
Vue.use(VueRouter)

//加入需要渲染的页面
import Home from '../components/Home'
import Index from '../components/Index'
import Bar from '../components/Bar'
import Foo from '../components/Foo'
import Role from '../components/Role'
import Not_Found from '../components/Not_Found'


Vue.use(VueRouter);

const routes=[
    {
        path: '/',
        component: Home,
        children:[
                {
                path: '/',
                name: 'index',
                component: Index
            },
            {
                path: 'index',
                name: 'goindex',
                redirect: '/'
            },
            {
                path: 'bar',
                name: 'bar',
                component: Bar
            },
            {
                path: 'foo',
                name: 'foo',
                component: Foo,
            },
            {
                path: 'role',
                name: 'rolw',
                component: Role,
            },
            {
                path: '404',
                name: '404',
                  component: Not_Found
            },
            {
                path: '*',
                name: 'to404',
                  redirect: '/404'
            },
        ]
    },
    {
          path: '*',
          name: 'go404',
          redirect: '/404'
    }
];

const router = new VueRouter({
    routes: routes,
    // mode: 'history'
});
router.push('/index');
export default router