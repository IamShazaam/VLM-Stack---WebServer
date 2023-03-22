<template>
  <div>
    <p v-if="loggedIn">Hello, {{ username }}.</p>
    <p v-if="!loggedIn">Log in, please.</p>
  </div>
</template>

<script>
import axios from 'axios';
import jwt_decode from 'jwt-decode';
import bcrypt from 'bcryptjs';

export default {
  name: 'MyAccountView',
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
