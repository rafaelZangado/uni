import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ProdutosView from '../views/ProdutosView.vue'
import GamerView from '../views/pages/GamerView.vue'
import ConsoleView from '../views/pages/ConsoleView.vue'
import ComputadorView from '../views/pages/ComputadorView.vue'
import NotebookView from '../views/pages/NotebookView.vue'
import CadeiraView from '../views/pages/CadeiraView.vue'


//import ImpressorasView from '../views/ImpressorasView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/Computador',
      name: 'computador',
      component: ComputadorView
    },
    {
      path: '/Gamer',
      name: 'Gamer',
      component: GamerView
    },
    {
      path: '/Notebook',
      name: 'Notebook',
      component: NotebookView
    },
    {
      path: '/Console',
      name: 'Console',
      component: ConsoleView
    },
    {
      path: '/Cadeira',
      name: 'Cadeira',
      component: CadeiraView
    },
    {
      path: '/produtos',
      name: 'produtos',
      component: ProdutosView
    },
    {
      path: '/impressoras',
      name: 'impressoras',
      component: () => import('../views/pages/ImpressorasView.vue')
    },    
  ]
})

export default router
