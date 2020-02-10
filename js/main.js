import MainComponent from "./modules/MainComponent.js";
import ContactComponent from "./modules/MainComponent.js";
import ErrorComponent from "./modules/ErrorComponent.js"

const routes = [
   { path: '/', name: 'Main', component: MainComponent },
   { path: '/contact', name: 'Contact', component: ContactComponent },
   { path: '*', name: 'Error', component: ErrorComponent }
    
]


const router = new VueRouter({
    routes 
  })


  const vm = new Vue({
    data: {

    },

    method: {

    },

    router


}).$mount("#app");