<template>
  <main class="main">
    <div class="content">
      <div class="h2-title h2-title-content flex-s-c">
        <span>Login</span>
      </div>
      <div class="downloadBlock-content">
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
        <div id="overlay"></div>
      </div>
    </div>
  </main>
</template>

<script>
import bcrypt from 'bcryptjs';
import axios from 'axios';
import jwt_decode from 'vue-jwt-decode';

export default {
  name: 'PageHeader',
  data() {
    return {
      username: '',
      password: '',
      remember: false,
      loggedIn: false,
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
          // Login successful, store session token in cookie
          // Login successful, store JWT in local storage
          const jwt = response.data.jwt;
          localStorage.setItem('jwt', jwt);
          this.loggedIn = true;
          this.$router.push('/myaccount');
          // Set remember cookie if "Remember me" is checked
          if (this.remember) {
            // const rememberToken = response.data.remember_token;
            // const expires = new Date(Date.now() + 14 * 24 * 60 * 60 * 1000); // 2 weeks
            // document.cookie = `remember_token=${rememberToken}; expires=${expires}; path=/`;
            document.cookie = `session_token=${response.data.session_token}; path=/`;
          }
          // Handle successful login
          console.log(response.data);
        })
        .catch((error) => {
          // Handle login error
          console.log(error.response.data);
        });
      console.log(this.username, this.password);
    },
    logout() {
      axios.post('/logout').then(() => {
        this.loggedIn = false;
        this.$router.push('/');
      });
    },
  },
  computed: {
    isAuthenticated() {
      const jwt = localStorage.getItem('jwt');
      if (!jwt) {
        return false;
      }
      try {
        const decodedJwt = jwt_decode(jwt);
        const currentTime = Date.now() / 1000;
        return decodedJwt.exp > currentTime;
      } catch (error) {
        return false;
      }
    },
  },
  mounted() {
    // Check if the user is authenticated
    // axios.get('/check-auth').then((response) => {
    //   this.loggedIn = response.data.authenticated;
    // });

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
</script>
