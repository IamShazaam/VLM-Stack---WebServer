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
    <div class="rankings blockHome">
      <div class="h2-title h2-title-table flex-s-c">
        <span>Rankings</span>
        <div class="tabTable">
          <a class="tabTable-button active" data-tab="players">Players</a>
          <a class="tabTable-button" data-tab="legions">Legions</a>
        </div>
      </div>
      <!--h2-title-->
      <div class="table tabTable-block active" id="players">
        <div class="tableBlock">
          <div class="tableBlock-title">
            <div class="tableBlock-title_player">Player</div>
            <div class="tableBlock-title_level">Level</div>
            <div class="tableBlock-title_score">Score</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">1</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_1.png" alt="" />
              <a href=""
                >Maverick
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-purple">80</span>
            </div>
            <div class="tableBlock-conten_scr">16 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">2</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_2.png" alt="" /><a href=""
                >Very-Long_Nick-Name
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-purple">79</span>
            </div>
            <div class="tableBlock-conten_scr">15 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">3</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_3.png" alt="" /><a href=""
                >Graber
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-purple">74</span>
            </div>
            <div class="tableBlock-conten_scr">14 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">4</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_4.png" alt="" /><a href=""
                >Andy
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-blue">67</span>
            </div>
            <div class="tableBlock-conten_scr">14 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">5</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_5.png" alt="" /><a href=""
                >Richard
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-blue">64</span>
            </div>
            <div class="tableBlock-conten_scr">13 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">6</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_1.png" alt="" /><a href=""
                >Pro-extreme
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-blue">60</span>
            </div>
            <div class="tableBlock-conten_scr">11 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">7</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_2.png" alt="" /><a href=""
                >Fighter
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-green">58</span>
            </div>
            <div class="tableBlock-conten_scr">9 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">8</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_3.png" alt="" /><a href=""
                >Gladiator
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-green">55</span>
            </div>
            <div class="tableBlock-conten_scr">8 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">9</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_4.png" alt="" /><a href=""
                >Zorg
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-green">54</span>
            </div>
            <div class="tableBlock-conten_scr">7 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">10</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_5.png" alt="" /><a href=""
                >Zunderstrom
                <div class="tablePopup">
                  <span class="tablePopup-title">Nickname</span>
                  <div class="tablePopup-ava">
                    <img src="../assets/ava-popup.png" alt="" />
                  </div>
                  <div class="tablePopup-block">
                    <span>Icon Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Rank System:</span>
                    <span>System</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Level:</span>
                    <span>150</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Class:</span>
                    <span>Class</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Play Time:</span>
                    <span>18.02.2021</span>
                  </div>
                  <div class="tablePopup-block">
                    <span>Sex:</span>
                    <span>Man</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-yellow">15</span>
            </div>
            <div class="tableBlock-conten_scr">2 373</div>
          </div>
        </div>
        <div class="all-button">
          <a href="" class="button">View All</a>
        </div>
      </div>
      <div class="table tabTable-block" id="legions">
        <div class="tableBlock">
          <div class="tableBlock-title">
            <div class="tableBlock-title_player">Legions</div>
            <div class="tableBlock-title_level">Level</div>
            <div class="tableBlock-title_score">Score</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">1</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_1.png" alt="" />
              <a href="">Maverick1</a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-purple">80</span>
            </div>
            <div class="tableBlock-conten_scr">16 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">2</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_2.png" alt="" /><a href=""
                >Very-Long_Nick-Name</a
              >
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-purple">79</span>
            </div>
            <div class="tableBlock-conten_scr">15 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">3</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_3.png" alt="" /><a href=""
                >Graber1</a
              >
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-purple">74</span>
            </div>
            <div class="tableBlock-conten_scr">14 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">4</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_4.png" alt="" /><a href="">Andy1</a>
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-blue">67</span>
            </div>
            <div class="tableBlock-conten_scr">14 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">5</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_5.png" alt="" /><a href=""
                >Richard1</a
              >
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-blue">64</span>
            </div>
            <div class="tableBlock-conten_scr">13 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">6</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_1.png" alt="" /><a href=""
                >Pro-extreme1</a
              >
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-blue">60</span>
            </div>
            <div class="tableBlock-conten_scr">11 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">7</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_2.png" alt="" /><a href=""
                >Fighter1</a
              >
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-green">58</span>
            </div>
            <div class="tableBlock-conten_scr">9 373</div>
          </div>
          <div class="tableBlock-content">
            <div class="tableBlock-conten_number">8</div>
            <div class="tableBlock-conten_name">
              <img src="../assets/rank-icon_3.png" alt="" /><a href=""
                >Gladiator1</a
              >
            </div>
            <div class="tableBlock-conten_lvl">
              <span class="color-green">55</span>
            </div>
            <div class="tableBlock-conten_scr">8 373</div>
          </div>
        </div>
        <div class="all-button">
          <a href="" class="button">View All</a>
        </div>
      </div>
    </div>
    <!--rankings-->
    <div class="forumHome blockHome">
      <div class="h2-title h2-title-table flex-s-c">
        <span>Forum Feed</span> <a href="">All news</a>
      </div>
      <!--h2-title-->
      <div class="forumBlock-content">
        <div class="forumBlock">
          <div class="forumBlock-ava">
            <img src="../assets/forum-ava_1.png" alt="" />
          </div>
          <div class="forumBlock-text">
            <a href="" class="forumBlock-text_link"
              >Server Action: Stay at home start: 2020 May 13!</a
            >
            <div class="forumBlock-text_info">
              <span class="forumBlock-text_info-nick"
                >by <a href="" title="Kitten_L2">Kitten_L2</a></span
              >
              |
              <span class="forumBlock-text_info-date">Today at 10:23</span>
              <span class="forumBlock-text_info-comments">32</span>
            </div>
          </div>
        </div>
        <!--forumBlock-->
        <div class="forumBlock">
          <div class="forumBlock-ava">
            <img src="../assets/forum-ava_2.png" alt="" />
          </div>
          <div class="forumBlock-text">
            <a href="" class="forumBlock-text_link"
              >Characters and Items sale!</a
            >
            <div class="forumBlock-text_info">
              <span class="forumBlock-text_info-nick"
                >by <a href="" title="Fighter-Pro">Fighter-Pro</a></span
              >
              |
              <span class="forumBlock-text_info-date">Today at 10:23</span>
              <span class="forumBlock-text_info-comments">32</span>
            </div>
          </div>
        </div>
        <!--forumBlock-->
        <div class="forumBlock">
          <div class="forumBlock-ava">
            <img src="../assets/forum-ava_3.png" alt="" />
          </div>
          <div class="forumBlock-text">
            <a href="" class="forumBlock-text_link">OBT Server - Cold Start!</a>
            <div class="forumBlock-text_info">
              <span class="forumBlock-text_info-nick"
                >by
                <a href="" title="Very_Long_Nick_Name"
                  >Very_Long_Nick_Name</a
                ></span
              >
              |
              <span class="forumBlock-text_info-date">Today at 10:23</span>
              <span class="forumBlock-text_info-comments">32</span>
            </div>
          </div>
        </div>
        <!--forumBlock-->
        <div class="forumBlock">
          <div class="forumBlock-ava">
            <img src="../assets/forum-ava_4.png" alt="" />
          </div>
          <div class="forumBlock-text">
            <a href="" class="forumBlock-text_link"
              >Server Action: Stay at home start: 2020 May 13! Server Action:
              Stay at home start: 2020 May 13!</a
            >
            <div class="forumBlock-text_info">
              <span class="forumBlock-text_info-nick"
                >by <a href="" title="Suzy">Suzy</a></span
              >
              |
              <span class="forumBlock-text_info-date">Today at 10:23</span>
              <span class="forumBlock-text_info-comments">32</span>
            </div>
          </div>
        </div>
        <!--forumBlock-->
        <div class="forumBlock">
          <div class="forumBlock-ava">
            <img src="../assets/forum-ava_1.png" alt="" />
          </div>
          <div class="forumBlock-text">
            <a href="" class="forumBlock-text_link">Short Story of X120</a>
            <div class="forumBlock-text_info">
              <span class="forumBlock-text_info-nick"
                >by <a href="" class="admin-group" title="Admin">Admin</a></span
              >
              |
              <span class="forumBlock-text_info-date">Today at 10:23</span>
              <span class="forumBlock-text_info-comments">32</span>
            </div>
          </div>
        </div>
        <!--forumBlock-->
        <div class="forumBlock">
          <div class="forumBlock-ava">
            <img src="../assets/forum-ava_2.png" alt="" />
          </div>
          <div class="forumBlock-text">
            <a href="" class="forumBlock-text_link"
              >PLS help me with some server access error!</a
            >
            <div class="forumBlock-text_info">
              <span class="forumBlock-text_info-nick"
                >by <a href="" title="Kitten_L2">Kitten_L2</a></span
              >
              |
              <span class="forumBlock-text_info-date">Today at 10:23</span>
              <span class="forumBlock-text_info-comments">32</span>
            </div>
          </div>
        </div>
        <!--forumBlock-->
      </div>
      <!--forumBlock-content-->
    </div>
    <!--forumHome-->
    <div class="socHome">
      <a href="#" class="socButton socYoutube">
        YouTube
        <span>Official Channel</span>
      </a>
      <a href="#" class="socButton socDiscord">
        Discord
        <span>Discussion Chat</span>
      </a>
      <a href="#" class="socButton socFacebook">
        Facebook
        <span>Official Group</span>
      </a>
      <div class="socBlock flex-c-c">
        <a href="#" class="socBlock-guides socBlock-button">
          Guides
          <span>Info center</span>
        </a>
        <a href="#" class="socBlock-forum socBlock-button">
          Forum
          <span>Community</span>
        </a>
      </div>
    </div>
    <!--socBlockHome-->
  </div>
</template>

<script>
export default {
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
