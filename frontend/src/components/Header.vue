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
              <a><router-link to="/about">About</router-link></a>
            </li>
          </ul>
        </div>
        <!--topPanel-left-->
        <div class="topPanel-right">
          <a href="#register" class="sign-in open_modal"> Sign In </a>
        </div>
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
      <div class="onlineBlock">Online <span>879</span></div>
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
    <form>
      <div class="modalContent">
        <span class="modalTitle">Sign In</span>
        <div class="enterButtons">
          <a href="" class="facebook-button">Connect with Facebook</a>
          <a href="" class="google-button">Connect with Google</a>
        </div>
        <div class="fields">
          <div class="fieldGroup">
            <span>Login</span>
            <input type="text" />
          </div>
          <div class="fieldGroup">
            <span>Password</span>
            <input type="password" />
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
export default {
  name: 'PageHeader',
  mounted() {
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
