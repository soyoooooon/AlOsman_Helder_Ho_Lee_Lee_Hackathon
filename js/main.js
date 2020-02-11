import MainComponent from "./modules/MainComponent.js";
import ContactComponent from "./modules/ContactComponent.js";
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

      cityimage:"",
      cityname:"",
      cityinfo:""


    },

    method: {
      fetchUsers() {
        // get our user data here and push it back into the VM
        console.log('fetch user data here');
        
        const url = './includes/index.php?user=true';
        
        // the AJAX part
        fetch(url)
        .then(res => res.json())
        .then(data => {
          console.log(data);
  
          // push our user data into the VM
          this.user = data[0];
        })
        .catch((err) => console.log(err))
      
      }


    },

    router


}).$mount("#app");