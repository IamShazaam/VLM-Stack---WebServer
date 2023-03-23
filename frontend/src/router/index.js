import { createRouter, createWebHistory } from 'vue-router';
import HomeView from '../views/HomeView.vue';
import DownloadsView from '../views/DownloadsView.vue';
import RegistrationView from '../views/RegistrationView.vue';
import MyAccountView from '../views/MyAccountView.vue';
import RankingView from '../views/RankingView.vue';
import EventsView from '../views/EventsView.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView,
  },
  {
    path: '/downloads',
    name: 'downloads',
    component: DownloadsView,
  },
  {
    path: '/register',
    name: 'register',
    component: RegistrationView,
  },
  {
    path: '/myaccount',
    name: 'myaccount',
    component: MyAccountView,
    meta: { requiresAuth: true },
  },
  {
    path: '/ranking',
    name: 'ranking',
    component: RankingView,
  },
  {
    path: '/events',
    name: 'events',
    component: EventsView,
  },
  {
    path: '/login',
    name: 'login',
    component: () =>
      import(/* webpackChunkName: "login" */ '../views/LoginView.vue'),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
