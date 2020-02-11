export default{
    template: `<section>
    <h1>This is the App Page</h1>
        <form id="my-form">
        <label for="name">Enter your name: </label>
        <input v-model="user" type="text" name="username" required placeholder="username">
        <label for="password">Enter your password: </label>
        <input v-model="password" type="password" name="password" required placeholder="password">
        <input @click.prevent="submitUserData" type="submit" value="Sign Up/Log In">
        </form>
        </section>`,

        data: function(){
            return{
                user: "",
                password:""
            }
        },

        methods: {
            submitUserData() {
                //do a fetch here using the POST method
                //refer to the Node Mailer example from last semester as tp
                //how to get data from a form into a Fetch call using POST
                console.log('hit the API Pan is asking for');

                document.querySelector('form').reset();

                //reset the username and password data in our app
                this.user = "";
                this.password = "";
            }
            // fetchUsers() {
            //     // get our user data here and push it back into the VM
            //     console.log('fetch user data here');
                
            //     const url = './includes/index.php?user=true';
                
            //     // the AJAX part
            //     fetch(url)
            //     .then(res => res.json())
            //     .then(data => {
            //       console.log(data);
          
            //       // push our user data into the VM
            //       this.user = data[0];
            //     })
            //     .catch((err) => console.log(err))
              
            //   },
        },

    created: function() {
        console.log('our app component rendered');
        
    }
};