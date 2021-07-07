import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path: '/',
    name: 'Inicio',
    component: () => import(/* webpackChunkName: "about" */ '../views/evento/Eventos.vue')
  },
  {
    path: '/about',
    name: 'About',    
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/eventos/:id',
    name: 'viewEventos',
    component: () => import(/* webpackChunkName: "about" */ '../views/evento/ViewEventos.vue')
  },
  {
    path: '/crear-eventos',
    name: 'eventos',
    component: () => import(/* webpackChunkName: "about" */ '../views/evento/CrearEventos.vue')
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
  {
    path: '/docentes/crear',
    name: 'docentes-crear',
    component: () => import(/* webpackChunkName: "about" */ '../views/docentes/Crear.vue')
  },
  {
    path: '/docentes/modificar/:id',
    name: 'docentes-modificar',
    component: () => import(/* webpackChunkName: "about" */ '../views/docentes/Modificar.vue')
  },
  {
    path: '/programas/crear',
    name: 'programa-crear',
    component: () => import(/* webpackChunkName: "about" */ '../views/programa/Crear.vue')
  },
  {
    path: '/programas/modificar/:id',
    name: 'programa-modificar',
    component: () => import(/* webpackChunkName: "about" */ '../views/programa/Modificar.vue')
  },
  {
    path: '/evento/modificar/:id',
    name: 'evento-modificar',
    component: () => import(/* webpackChunkName: "about" */ '../views/evento/modificar.vue')
  },
  
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
