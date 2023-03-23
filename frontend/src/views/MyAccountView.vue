<template>
  <main class="main">
    <aside>
      <Ranking />
      <ForumFeed />
      <SocButtons />
    </aside>

    <div class="content" v-if="loggedIn">
      <!-- content for logged in user -->
      <div class="h2-title h2-title-content flex-s-c">
        <span>Account Setting</span>
      </div>
      <div class="acc">
        <div class="acc-title">Account details</div>
        <div class="accBlock flex-s">
          <div class="accBlock-content">
            <div class="formGroup">
              <span>Login</span>
              <div class="fieldGroup-input">{{ username }}</div>
            </div>
            <div class="formGroup">
              <span>Date of Registration</span>
              <div class="fieldGroup-input">15.01.2021</div>
            </div>
          </div>
          <div class="accBlock-content">
            <div class="formGroup">
              <span>E-mail</span>
              <div class="fieldGroup-input">{{ email }}</div>
            </div>
            <div class="formGroup">
              <span>Last Login to the Game</span>
              <div class="fieldGroup-input">15.02.2021</div>
            </div>
          </div>
        </div>
        <!--accBlock-->
      </div>
      <!--acc-->
      <div class="acc">
        <div class="acc-title">Actions</div>
        <div class="accBlock flex-s">
          <div class="accBlock-content">
            <div class="formGroup">
              <span>Change account password</span
              ><input type="text" value="dkarts0000123456" />
            </div>
            <div class="formGroup">
              <span>Change character deletion code</span
              ><input type="text" value="dkarts0000123456" />
            </div>
          </div>
          <div class="accBlock-content">
            <div class="formGroup">
              <span>Change e-mail address</span
              ><input type="text" value="96452427" />
            </div>
            <div class="formGroup">
              <span>Change store code</span><input type="text" value="12548" />
            </div>
          </div>
        </div>
        <!--accBlock-->
        <div class="change-button">
          <button class="big-button-blue">Confirm Changes</button>
        </div>
      </div>
      <!--acc-->
      <div class="support">
        <div class="acc-title">Actions</div>
        <div class="supportButtons flex-c-c">
          <div class="supportButton">
            <button>Add a Ticket</button>
          </div>
          <div class="supportButton">
            <button>Check Ticket</button>
          </div>
        </div>
      </div>
      <!--support-->
    </div>

    <div class="content" v-else>
      <div class="h2-title h2-title-content flex-s-c">
        <span>Please, log in.</span>
      </div>
    </div>
  </main>
</template>

<script>
import axios from 'axios';
import jwt_decode from 'jwt-decode';
import bcrypt from 'bcryptjs';
import Ranking from '@/components/Ranking.vue';
import ForumFeed from '@/components/ForumFeed.vue';
import SocButtons from '@/components/SocialButtons.vue';

export default {
  name: 'MyAccountView',
  components: {
    Ranking,
    ForumFeed,
    SocButtons,
  },
  data() {
    return {
      username: '',
      password: '',
      remember: false,
      loggedIn: false,
      user: null,
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
  },
  created() {
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
            this.email = response.data.email;
            console.log(this.user);
          });
      } catch (error) {
        console.error('Error decoding JWT:', error);
      }
    }
  },
  mounted() {
    axios.get('/check-auth').then((response) => {
      this.authenticated = response.data.authenticated;
    });
  },
};
</script>
