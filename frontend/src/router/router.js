import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);
import HomePage from '../views/HomePage.vue'
import AuthLayout from '../views/auth/layout/auth'
const router = new Router({
    mode: "history",

    routes: [
        {
            path: "/",
            name: "HomePage",
            component: HomePage,
        },
        {
            path: "/product/:id",
            name: "detail",
            component: () => import("../views/product/ProductDetail"),
            props: true
        },
        {
            path: "/",
            component: AuthLayout,
            children:[
                {
                    path: "login",
                    name: "login",
                    component: ()=>import('../views/auth/LoginPage'),
                }
            ]
        },
        {
            path: "/store",
            name: "store",
            component: () => import("../views/store/storeCard"),
        },
    ]
});
export default router;