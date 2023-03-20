<template>
  <div class="wrapper">
    <div class="footerMenu flex">
      <div class="footerMenu-block">
        <div class="h2-title flex-s-c">
          <span>Information</span>
        </div>
        <ul class="f-menu">
          <li><a href="">About the Game</a></li>
          <li><a href="">Game Wiki</a></li>
          <li><a href="">Terms of Services</a></li>
        </ul>
      </div>
      <div class="footerMenu-block">
        <div class="h2-title flex-s-c">
          <span>How to Start</span>
        </div>
        <ul class="f-menu">
          <li><a href="">Registration</a></li>
          <li><a href="">Downloads</a></li>
          <li><a href="">FAQ</a></li>
        </ul>
      </div>
      <div class="footerMenu-block">
        <div class="h2-title flex-s-c">
          <span>Community</span>
        </div>
        <ul class="f-menu">
          <li><a href="">Forum</a></li>
          <li><a href="">Rankings</a></li>
        </ul>
      </div>
      <div class="footerMenu-block">
        <div class="h2-title flex-s-c">
          <span>Support</span>
        </div>
        <div class="e-mail">
          <p>E-mail:</p>
          <a href="#">support@teampereda.com</a>
        </div>
        <div class="f-soc-icons">
          <a href="#" class="twitter"></a>
          <a href="#" class="fb"></a>
        </div>
      </div>
    </div>
    <!--footerMenu-->
    <span class="line"></span>
    <div class="footerInfo">
      <div class="footerInfo-block flex-s">
        <div class="copy">
          <span>© 2023</span> <a href="">teampereda.com.</a>
          <span> All rights reserved</span>
        </div>
      </div>
      <div class="f-text">
        This is a website powered by Vue.js as frontend, Laravel as backend and
        using 5 MSSQL dbs. With the help of this stack, this website will be the
        best free open source web for games online. Made with love by @IamShazam
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'PageFooter',
  // component logic
};
</script>
