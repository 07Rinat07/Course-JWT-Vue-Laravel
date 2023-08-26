import Vue from "vue";
import VueRouter from "vue-router";
import Registration from "./components/User/Registration.vue";

Vue.use(VueRouter)
export default new VueRouter({
    mode: "history",

    routes: [
        {
            path: '/fruits', component: () => import('./components/Fruit/Index'),
            name: 'fruit.index'
        },
        {
            path: '/users/login', component: () => import('./components/User/Login'),
            name: 'user.login'
        },
        {
            path: '/users/registration', component: () => import('./components/User/Registration'),
            name: 'user.registration'
        }
    ]
})
