import VueRouter from 'vue-router';
import example from './components/ExampleComponent';
import About from './components/About';
import Bookables from './bookables/Bookables.vue';


const routes = [
  {
    path: '/', 
    component: Bookables,
    name: 'Home'
  },
  {
    path: '/about', 
    component: About,
    name: 'About'
  }
]


const router = new VueRouter({
  mode:'history',
  routes 
})

export default router;