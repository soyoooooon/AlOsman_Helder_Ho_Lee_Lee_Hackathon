export default{
    template: `<section id="form">
        <form class="my-form">
        <h1>SUBSCRIBE</h1>
        <label for="name"></label>
        <input v-model="user" type="text" name="username" required placeholder="First Name">
        <input v-model="name" type="text" name="username" required placeholder="Last Name">
        <input v-model="email" type="email" name="email" required Placeholder="E-mail">
        <select v-model="selected" type="country" name="country" required placeholder="Country">
        <option disabled value="">Country</option>
        <option>Canada</option><option>South Korea</option></select>
        <input @click.prevent="submitUserData" type="submit" class="submit" value="SUBMIT">
        </form>
        </section>`,

        data: function(){
            return{
                user: "",
                name:"",
                email:"",
                selected:""
                
            }
        },

        methods: {
            submitUserData() {
                //do a fetch here using the POST method
                //refer to the Node Mailer example from last semester as tp
                //how to get data from a form into a Fetch call using POST
                console.log('hit the API Pan is asking for..?????');

                document.querySelector('form').reset();

                //reset the username and password data in our app
                this.user = "";
                this.name = "";
                this.email = "";
                this.selected="";
            }
        
        },

    created: function() {
        console.log('our app component rendered');
        
    }
};