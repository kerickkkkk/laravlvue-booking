import VueRouter from 'vue-router';
import example from './components/ExampleComponent';
import About from './components/About';

const routes = [
  {
    path: '/', 
    component: example,
    name: 'home'
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