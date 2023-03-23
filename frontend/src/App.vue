<template>
  <!--wrapper-->
  <div class="wrapper">
    <Header />
    <router-view />
  </div>
  <footer>
    <Footer />
  </footer>

  <div class="rightBodyLinks">
    <a href="#" class="r-wiki"
      ><span><img src="./assets/wiki-img.png" alt="" /></span>Wiki</a
    >
    <a href="#" class="r-shop"
      ><span><img src="./assets/shop-img.png" alt="" /></span>Shop</a
    >
    <a href="#" class="r-forum"
      ><span><img src="./assets/forum-img.png" alt="" /></span>Forum</a
    >
  </div>
  <div class="toTop">
    <span>Go to Top</span>
  </div>
</template>

<script>
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';

export default {
  name: 'App',
  components: {
    Header,
    Footer,
  },
  mount() {
    //Go to topUp
    const toTopBtn = document.querySelector('.toTop');

    window.addEventListener('scroll', () => {
      if (window.pageYOffset !== 0) {
        toTopBtn.style.display = 'block';
      } else {
        toTopBtn.style.display = 'none';
      }
    });

    toTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    });
  },
};
</script>
