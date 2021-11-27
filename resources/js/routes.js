import VueRouter from 'vue-router';
import example from './components/ExampleComponent';

const routes = [
  {
    path: '/', 
    component: example 
  }
]


const router = new VueRouter({
  routes 
})

export default router;