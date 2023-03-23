<template>
  <header>
    <!-- header content goes here -->
    <div class="topPanel">
      <div class="btn btn-drop" data-class="topPanel-left">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="topPanel-wrapper flex-c">
        <div class="topPanel-left flex-c">
          <a href="/" class="logo-mini bright"
            ><img src="../assets/logo-mini.png" alt="Logo"
          /></a>
          <ul class="nav">
            <li>
              <a><router-link to="/">Home</router-link></a>
            </li>
            <li>
              <a><router-link to="/downloads">Downloads</router-link></a>
            </li>
            <li>
              <a><router-link to="/ranking">Ranking</router-link></a>
            </li>
            <li>
              <a><router-link to="/events">Events</router-link></a>
            </li>
          </ul>
        </div>
        <!--topPanel-left-->
        <div v-if="!loggedIn">
          <div class="topPanel-right">
            <a href="#register" class="sign-in open_modal"> Sign In </a>
          </div>
        </div>
        <div v-if="loggedIn">
          <div class="topPanel-right">
            <p
              class="welcome-username"
              style="
                color: #fcedc0;
                font-size: 14px;
                font-family: 'Philosopher', sans-serif;
              "
            >
              Welcome, {{ username }}
            </p>
            <a class="sign-in" @click="logout"> Log Out </a>
          </div>
        </div>
        <!-- <div class="topPanel-right">
          <a class="sign-in open_modal"> Sign In </a>
        </div> -->
        <!--topPanel-right-->
      </div>
    </div>
    <!--topPanel-->
    <div class="hand-animation">
      <div class="light-hand"></div>
      <div class="rune-hand"></div>
    </div>
    <div class="sparks">
      <div class="spark_1"></div>
      <div class="spark_2"></div>
      <div class="spark_3"></div>
      <div class="spark_4 spark-big"></div>
    </div>
    <div class="logo">
      <a href="" class="bright"><img src="../assets/logo.png" alt="Logo" /></a>
    </div>
    <div class="online flex-c-c">
      <div class="light-animation">
        <div class="blue-light"></div>
        <div class="yellow-light"></div>
      </div>
      <div class="onlineBlock">
        Accounts <span>{{ numAccounts }}</span>
      </div>
      <div class="onlineReg flex-c-c">
        <div class="onlineReg-block onlineReg-block-player">
          <span>63K</span>
          Players
        </div>
        <div class="onlineReg-block onlineReg-block-clans">
          <span>576</span>
          Clans
        </div>
      </div>
    </div>
    <!--online-->
    <div class="download">
      <a class="download-button bright"
        ><router-link to="/downloads"
          >Downloads <span>Game client</span></router-link
        ></a
      >
      <div class="more-downloads flex-c-c">
        <a href="" class="windows">Windows</a> <span>|</span>
        <a href="" class="mac">Mac OS</a>
      </div>
    </div>
  </header>

  <div id="register" class="modal_div">
    <span class="modal_close"></span>
    <form @submit.prevent="login">
      <div class="modalContent">
        <span class="modalTitle">Sign In</span>
        <div class="enterButtons">
          <a href="" class="facebook-button">Connect with Facebook</a>
          <a href="" class="google-button">Connect with Google</a>
        </div>
        <div class="fields">
          <div class="fieldGroup">
            <span>Login</span>
            <input type="text" v-model="username" />
          </div>
          <div class="fieldGroup">
            <span>Password</span>
            <input type="password" v-model="password" />
          </div>
        </div>
        <!--fields-->
        <div class="enter flex-s-c">
          <div class="enterLinks">
            <p><a href="" class="forgot">Forgot Password?</a></p>
            <p>
              <a><router-link to="/register">Register</router-link></a>
            </p>
          </div>
          <button class="button-blue">Sign In Now</button>
        </div>
      </div>
      <!--modalContent-->
    </form>
  </div>
  <div id="overlay"></div>
</template>

<script>
import bcrypt from 'bcryptjs';
import axios from 'axios';
import jwt_decode from 'jwt-decode';

export default {
  name: 'PageHeader',
  data() {
    return {
      username: '',
      password: '',
      remember: false,
      loggedIn: false,
      user: null,
      numAccounts: null,
    };
  },
  methods: {
    login() {
      const hashedPassword = bcrypt.hashSync(this.password, 10);
      axios
        .post('/login', {
          username: this.username,
          password: hashedPassword,
          remember: this.remember,
        })
        .then((response) => {
          console.log(response);
          // Login successful, store JWT in local storage
          const decodedJwt = jwt_decode(response.data.jwt);
          console.log(decodedJwt);
          this.loggedIn = true;
          this.user = decodedJwt.username;
          console.log(this.user);
          localStorage.setItem('jwt', response.data.jwt);
          this.$router.push('/myaccount');
          console.log(this.username, 'is logged in from the endpoint');
        })
        .catch((error) => {
          console.error('Login error:', error);
        });
      console.log(this.username);
    },
    logout() {
      axios.post('/logout').then(() => {
        this.loggedIn = false;
        this.user = {};
        localStorage.removeItem('jwt');
        this.$router.push('/');
      });
    },
    numAcc() {
      axios
        .get('/accounts/count')
        .then((response) => {
          this.numAccounts = response.data.count;
          console.log(this.numAccounts);
        })
        .catch((error) => {
          console.log('Error getting number of accounts:', error);
        });
    },
  },
  created() {
    this.numAcc();
    const jwt = localStorage.getItem('jwt');
    if (jwt) {
      try {
        const decodedJwt = jwt_decode(jwt);
        console.log(decodedJwt);
        this.user = decodedJwt.username;
        this.loggedIn = decodedJwt.authenticated;
        console.log(this.user + ' is ' + this.loggedIn);
        axios
          .get('/user', {
            headers: {
              Authorization: decodedJwt.session_token,
            },
          })
          .then((response) => {
            //Taking the username from the db
            this.username = response.data.username;
            console.log(this.user);
          });
      } catch (error) {
        console.error('Error decoding JWT:', error);
      }
    }
  },
  mounted() {
    //Functionality of the Modal when you log in
    const overlay = document.querySelector('#overlay');
    const openModalLinks = document.querySelectorAll('.open_modal');
    const closeModalElements = document.querySelectorAll(
      '.modal_close, #overlay'
    );
    const modals = document.querySelectorAll('.modal_div');

    openModalLinks.forEach((openModalLink) => {
      openModalLink.addEventListener('click', (event) => {
        event.preventDefault();
        const targetModalId = openModalLink.getAttribute('href');
        const targetModal = document.querySelector(targetModalId);
        overlay.style.display = 'block';
        targetModal.style.display = 'block';
        targetModal.style.opacity = 0;
        targetModal.style.top = '15%';
        setTimeout(() => {
          targetModal.style.opacity = 1;
          targetModal.style.top = '10%';
        }, 200);
      });
    });

    closeModalElements.forEach((closeModalElement) => {
      closeModalElement.addEventListener('click', () => {
        modals.forEach((modal) => {
          modal.style.opacity = 0;
          modal.style.top = '15%';
          setTimeout(() => {
            modal.style.display = 'none';
            overlay.style.display = 'none';
          }, 200);
        });
      });
    });
  },
};

// update every 5 seconds
</script>
