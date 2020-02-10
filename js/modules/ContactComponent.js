export default {
    
    template: `<h1>{{ message }}</h1>`,
   
    created: function() {
        console.log('our  main component rendered');
        
    },
   
    data: function() {
        return {
            message: "Welcome to my Super Duper Awesome Soyoon's App!"
        }
    }
   
   
   };