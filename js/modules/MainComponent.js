export default {
    
    template: `
    <div>
    <section id="Main-img">
        <span>FIND<br>YOURSELF<br>AT<br>HOME.</span>
    </section>
    <section id="about">
        <h1>ONTARIO SUMMER</h1>
        <p class="example">Summertime in Ontario is always fun. There is so much to see and do in all the cities across Ontario. Are you ready to have the time of your life?</p>
        </section>
        <section id="video">
        <button>Video</button>
        <video class="Video" src="images/ontarioTurism.mp4" controls poster="images/video.jpg"></video>
    </section>

    <section id="play">
        <h1>PLAY</h1>
        <p>From outdoor activities to indoor fun, Ontario just has so much to offer.</p>
    </section>
    <section id="play-section1">
        <div id="elora">
            <div class="elora-img"></div>
            <h2>ELORA</h2>
            <p>GO ZIPLINING ACROSS A MASSIVE GORGE.</p></div>
        <div id="algoma">
            <div class="algoma-img"></div>
            <h2>ALGOMA</h2>
            <p>GO CAMPING AT LAKE SUPERIOR PROVINCIAL<br>PARK.</p></div>
    </section>
    <section id="play-section2">
        <div id="vaughan">
            <div class="vaughan-img"></div>
            <h2>VAUGHAN</h2>
            <p>SPEND YOUR DAY AT<br>CANADA'S WONDERLAND</p>
        </div>
        <div id="toronto">
            <div class="toronto-img"></div>
            <h2>TORONTO</h2>
            <p>TRY THE THRILLING <br>EDGEWALK AT<br> THE CN TOWER.</p>
        </div>
    </section>

    <button>MORE TO PLAY</button>

    <section id="eat">
        <h1>EAT</h1>
        <p>Treat yourself to amazing dishes from all around the world here in Ontario.</p>
    </section>

    <section id="eat-section1">
        <div id="to1">
            <div class="to1-img"></div>
            <h2>TORONTO</h2>
            <p>TRY OUT THIS CHIEF WIGGUM-INSPIRED DESSERT.</p></div>
        <div id="to2">
            <div class="to2-img"></div>
            <h2>TORONTO</h2>
            <p>YOU'RE GOING TO LOVE THESE SWEET TREATS.</p></div>
    </section>

    <section id="eat-section2">
        <div id="to3">
            <div class="to3-img"></div>
            <h2>TORONTO</h2>
            <p>SIMPLE BUT DELICIOUS PEAMEAL BACON.</p>
        </div>
        <div id="everywhere">
            <div class="every-img"></div>
            <h2>EVERYWHERE</h2>
            <p>YOU MUST TRY THIS <br>ICONIC CANADIAN FOOD.</p>
        </div>
    </section>

    <button>MORE TO EAT</button>

    <section id="explore">
        <h1>EXPLORE</h1>
        <p>Discover new places and learn new things.</p>
    </section>
    
    <section id="exp-section1">
        <div id="ottawa">
            <div class="ottawa-img"></div>
            <h2>OTTAWA</h2>
            <p>THE FAMOUS RIDEAU CANALS</p></div>
        <div id="ex-toronto">
            <div class="ex-toronto-img"></div>
            <h2>TORONTO</h2>
            <p>VISIT THE MAJESTIC <br>CASA LOMA CASTLE.</p></div>
    </section>

    <section id="exp-section2">
        <div id="niagara">
            <div class="niagara-img"></div>
            <h2>NIAGARA FALLS</h2>
            <p>SEE THE AMAZING FALLS <br>IN PERSON</p>
        </div>
        <div id="ottawa2">
            <div class="ottawa-img2"></div>
            <h2>OTTAWA</h2>
            <p>SEE THE PARLIAMENT <br>HILLS IN OTTAWA</p>
        </div>
    </section>
    
    <button>MORE TO EXPLORE</button>

    <section id="signUp">
        <div class=sign-cont>
        <h1>PLANNING A TRIP TO ONTARIO EH?</h1>
        <p>Subscribe to our newsletter to get sweet deals,<br>travelling tips and more!</p>
        <router-link to="/contact" class="button">Sign Me Up</router-link></div>
        <div class="whyimg"></div>
    </section>

    <footer id="main_Footer">
    <div class="footer-left">
        <h1>FOLLOW US</h1>
            <p>Terms of Service</p>
            <p>Privacy</p>
    </div>
    <ul>
        <li class="fab fa-facebook-square"></i></li>
        <li class="fab fa-instagram"></i></li>
        <li class="fab fa-twitter-square"></i></li>
    </ul>
    </footer>
    </div>
    `,
   
    created: function() {
        console.log('our  main component rendered');
    },

    methods:{
    }
};