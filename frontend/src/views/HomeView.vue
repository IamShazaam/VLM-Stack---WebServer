<template>
  <div class="topHomeBlocks flex-s">
    <div class="newsSlider block-50">
      <div class="swiper-container swiper-news">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#">
              <img src="../assets/slider-1.jpg" alt="Slide" />
              <div class="swiper-news_info">
                <span>Join Now!</span>
                <p>Best server, awesome battles with your friends!</p>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="../assets/slider-2.jpg" alt="Slide" />
              <div class="swiper-news_info">
                <span>Join Now!</span>
                <p>Best server, awesome battles with your friends!</p>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="../assets/slider-1.jpg" alt="Slide" />
              <div class="swiper-news_info">
                <span>Join Now!</span>
                <p>Best server, awesome battles with your friends!</p>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <img src="../assets/slider-2.jpg" alt="Slide" />
              <div class="swiper-news_info">
                <span>Join Now!</span>
                <p>Best server, awesome battles with your friends!</p>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-news-pagination">
          <!-- Add Pagination -->
          <div class="swiper-pagination">
            <span class="swiper-pagination-current"></span>
            <span class="swiper-pagination-total"></span>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <!--newsSlider-->
    <div class="newsBlock block-50">
      <div class="h2-title flex-s-c">
        <span>Last News</span> <a href="">All news</a>
      </div>
      <!--h2-title-->
      <div class="newsLink flex-s-c">
        <div class="newsLink-info">
          <a href="">Discussions and Ideas of Server</a>
          <span>03 June 2020</span>
        </div>
        <a href="" class="newsLink-more"><span>Read more</span></a>
      </div>
      <div class="newsLink flex-s-c">
        <div class="newsLink-info">
          <a href=""
            >Server start successful and very long title and text, but shot
            title the best</a
          >
          <span>03 June 2020</span>
        </div>
        <a href="" class="newsLink-more"><span>Read more</span></a>
      </div>
      <div class="newsLink flex-s-c">
        <div class="newsLink-info">
          <a href="">Updates list before launching</a>
          <span>03 June 2020</span>
        </div>
        <a href="" class="newsLink-more"><span>Read more</span></a>
      </div>
    </div>
    <!--newsBlock-->
  </div>
  <!--topHomeBlocks-->
  <span class="line"></span>
  <div class="mainHomeBlock flex-s">
    <!--Top 10-->
    <Ranking />

    <!--IPBoard's feed-->
    <ForumFeed />

    <!--socButtons-->
    <SocButtons />
  </div>
</template>

<script>
import Ranking from '@/components/Ranking.vue';
import ForumFeed from '@/components/ForumFeed.vue';
import SocButtons from '@/components/SocialButtons.vue';

export default {
  name: 'HomeList',
  components: {
    Ranking,
    ForumFeed,
    SocButtons,
  },
  mounted() {
    //swiper ES6
    const swiperContainer = document.querySelector('.swiper-container');
    const swiperWrapper = swiperContainer.querySelector('.swiper-wrapper');
    const swiperSlides = swiperWrapper.querySelectorAll('.swiper-slide');
    const swiperPagination =
      swiperContainer.querySelector('.swiper-pagination');
    const swiperNext = swiperContainer.querySelector('.swiper-button-next');
    const swiperPrev = swiperContainer.querySelector('.swiper-button-prev');

    let currentSlide = 0;
    const totalSlides = swiperSlides.length;

    function initSwiper() {
      for (let i = 0; i < totalSlides; i++) {
        swiperSlides[i].style.left = `${i * 100}%`;
      }
      swiperSlides[currentSlide].classList.add('active');
    }

    function moveToNextSlide() {
      if (currentSlide === totalSlides - 1) {
        currentSlide = 0;
      } else {
        currentSlide++;
      }
      moveSlider();
    }

    function moveToPrevSlide() {
      if (currentSlide === 0) {
        currentSlide = totalSlides - 1;
      } else {
        currentSlide--;
      }
      moveSlider();
    }

    function moveSlider() {
      swiperWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
      updatePagination();
    }

    function updatePagination() {
      const currentEl = swiperPagination.querySelector(
        '.swiper-pagination-current'
      );
      const totalEl = swiperPagination.querySelector(
        '.swiper-pagination-total'
      );
      currentEl.textContent = currentSlide + 1;
      totalEl.textContent = totalSlides;
    }

    initSwiper();

    swiperNext.addEventListener('click', moveToNextSlide);
    swiperPrev.addEventListener('click', moveToPrevSlide);

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
