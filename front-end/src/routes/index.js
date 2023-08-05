import { createRouter, createWebHistory } from 'vue-router';
import Login from  '../views/login.vue';
import Register from  '../views/register.vue';
import Administrator from  '../views/administrator.vue';
import Welcome from  '../views/welcome.vue';
import Preferences from  '../views/preferences.vue';
import easy from  '../views/easy.vue';
import getEasy from  '../views/getEasy.vue';
import medium from  '../views/medium.vue';
import hard from  '../views/hard.vue';
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
    path: "/preferences",
    name: "Preferences",
    component: Preferences
  },
  {
    path: "/administrator",
    name: "Administrator",
    component: Administrator,
    beforeEnter: Guard.auth
  },
  {
    path: "/questionEasy",
    name: "easy",
    component: easy,
    beforeEnter: Guard.auth
  },
    {
    path: "/questionEasy/:id",
    name: "getEasy",
    component: getEasy,
    beforeEnter: Guard.auth
  },
  {
    path: "/questionMedium",
    name: "medium",
    component: medium,
    beforeEnter: Guard.auth
  },
  {
    path: "/questionHard",
    name: "hard",
    component: hard,
    beforeEnter: Guard.auth
  }
];

const router = createRouter ({
    history: createWebHistory(),
    routes,
});

export default router;
