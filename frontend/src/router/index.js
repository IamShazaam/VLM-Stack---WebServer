import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ '../views/AboutView.vue'),
  },
  {
    path: '/downloads',
    name: 'downloads',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ '../views/DownloadsView.vue'),
  },
  {
    path: '/register',
    name: 'register',
    component: () =>
      import(
        /* webpackChunkName: "register" */ '../views/RegistrationView.vue'
      ),
  },
  {
    path: '/myaccount',
    name: 'myaccount',
    component: () =>
      import(/* webpackChunkName: "register" */ '../views/MyAccountView.vue'),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
