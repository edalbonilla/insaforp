import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'Inicio',
    component: () => import(/* webpackChunkName: "about" */ '../views/Eventos.vue')
  },
  {
    path: '/about',
    name: 'About',    
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/eventos',
    name: 'eventos',
    component: () => import(/* webpackChunkName: "about" */ '../views/Eventos.vue')
  },
  {
    path: '/eventos/:id',
    name: 'viewEventos',
    component: () => import(/* webpackChunkName: "about" */ '../views/ViewEventos.vue')
  },
  {
    path: '/crear-eventos',
    name: 'eventos',
    component: () => import(/* webpackChunkName: "about" */ '../views/CrearEventos.vue')
  },
  {
    path: '/programas',
    name: 'programas',
    component: () => import(/* webpackChunkName: "about" */ '../views/programa/Programa.vue')
  },
  {
    path: '/docentes',
    name: 'docentes',
    component: () => import(/* webpackChunkName: "about" */ '../views/docentes/Docentes.vue')
  },
  
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
