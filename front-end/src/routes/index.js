import { createRouter, createWebHistory } from 'vue-router';
import Login from  '../views/login.vue';
import Register from  '../views/register.vue';
import Administrator from  '../views/administrator.vue';
import Welcome from  '../views/welcome.vue';
import Guard from '../services/middleware';

const routes = [
  {
    path: "/",
    name: "Welcome",
    component: Welcome,
  },
  {
    path: "/login",
    name: "Login",
    component: Login,
    beforeEnter: Guard.autenticator
  },
  {
    path: "/register",
    name: "Register",
    component: Register
  },
  {
    path: "/administrator",
    name: "Administrator",
    component: Administrator,
    beforeEnter: Guard.auth
  }
];

const router = createRouter ({
    history: createWebHistory(),
    routes,
});

export default router;
