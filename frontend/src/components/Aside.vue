<template>
  <div class="rankings blockHome">
    <div class="h2-title h2-title-table flex-s-c">
      <span>Rankings</span>
    </div>
    <!--h2-title-->
    <div class="table tabTable-block active" id="players">
      <div class="tableBlock">
        <div class="tableBlock-title">
          <div class="tableBlock-title_player">Player</div>
          <div class="tableBlock-title_level">Level</div>
          <div class="tableBlock-title_score">Class</div>
        </div>

        <div
          class="tableBlock-content"
          v-for="(name, index) in cName"
          :key="index"
        >
          <div class="tableBlock-conten_number">{{ index + 1 }}</div>
          <div class="tableBlock-conten_name">
            <a href="">
              {{ name }}
              <div class="tablePopup">
                <span class="tablePopup-title">Nickname</span>
                <div class="tablePopup-ava">
                  <img :src="getImagePath(cClass[index])" alt="" />
                </div>
                <div class="tablePopup-block">
                  <span>Class:</span>
                  <!-- Dark Wizard Evolutions -->
                  <span v-if="cClass[index] === 0">Dark Wizard</span>
                  <span v-else-if="cClass[index] === 1">Soul Master</span>
                  <span v-else-if="cClass[index] === 3">Grand Master</span>
                  <span v-else-if="cClass[index] === 7">Soul Wizard</span>
                  <!-- Dark Knight Evolutions -->
                  <span v-else-if="cClass[index] === 16">Dark Knight</span>
                  <span v-else-if="cClass[index] === 17">Blade Knight</span>
                  <span v-else-if="cClass[index] === 19">Blade Master</span>
                  <span v-else-if="cClass[index] === 23">Dragon Knight</span>
                  <!-- Fairy Elf Evolutions -->
                  <span v-else-if="cClass[index] === 32">Fairy Elf</span>
                  <span v-else-if="cClass[index] === 33">Muse Elf</span>
                  <span v-else-if="cClass[index] === 35">High Elf</span>
                  <span v-else-if="cClass[index] === 39">Noble Elf</span>
                  <!-- Magic Gladiador Evolutions -->
                  <span v-else-if="cClass[index] === 48">Magic Gladiador</span>
                  <span v-else-if="cClass[index] === 50">Duel Master</span>
                  <span v-else-if="cClass[index] === 54">Magic Knight</span>
                  <!-- Dark Lord Evolutions -->
                  <span v-else-if="cClass[index] === 64">Dark Lord</span>
                  <span v-else-if="cClass[index] === 66">Lord Emperor</span>
                  <span v-else-if="cClass[index] === 70">Empire Lord</span>
                  <!-- Summoner Evolutions -->
                  <span v-else-if="cClass[index] === 80">Summoner</span>
                  <span v-else-if="cClass[index] === 81">Bloody Summoner</span>
                  <span v-else-if="cClass[index] === 83">Dimension Master</span>
                  <span v-else-if="cClass[index] === 87"
                    >Dimension Summoner</span
                  >
                  <!-- Rage Fighter Evolutions -->
                  <span v-else-if="cClass[index] === 96">Rage Fighter</span>
                  <span v-else-if="cClass[index] === 98">Fist Master</span>
                  <span v-else-if="cClass[index] === 102">Fist Blazer</span>
                  <!-- Grow Lancer Evolutions -->
                  <span v-else-if="cClass[index] === 112">Grow Lancer</span>
                  <span v-else-if="cClass[index] === 114">Mirage Lancer</span>
                  <span v-else-if="cClass[index] === 118">Shinning Lancer</span>
                  <!-- Rune Wizard Evolutions -->
                  <span v-else-if="cClass[index] === 128">Rune Wizard</span>
                  <span v-else-if="cClass[index] === 129"
                    >Rune Spell Master</span
                  >
                  <span v-else-if="cClass[index] === 131"
                    >Gran Rune Master</span
                  >
                  <span v-else-if="cClass[index] === 135"
                    >Majestic Rune Wizard</span
                  >
                  <!-- Slayer Evolutions -->
                  <span v-else-if="cClass[index] === 144">Slayer</span>
                  <span v-else-if="cClass[index] === 145">Royal Slayer</span>
                  <span v-else-if="cClass[index] === 147">Master Slayer</span>
                  <!-- Slaughterer Evolutions -->
                  <span v-else-if="cClass[index] === 151">Slaughterer</span>
                  <!-- Guns Evolutions -->
                  <span v-else-if="cClass[index] === 160">Gun Crusher</span>
                  <span v-else-if="cClass[index] === 161">Gun Breaker</span>
                  <span v-else-if="cClass[index] === 163"
                    >Master Gun Breaker</span
                  >
                  <span v-else-if="cClass[index] === 167"
                    >Highest Gun Crusher</span
                  >
                  <!-- Lights Evolutions -->
                  <span v-else-if="cClass[index] === 176">Light Wizard</span>
                  <span v-else-if="cClass[index] === 177">Light Master</span>
                  <span v-else-if="cClass[index] === 179">Shinning Wizard</span>
                  <!-- Luminous Evolutions -->
                  <span v-else-if="cClass[index] === 183">Luminous Wizard</span>
                  <!-- Lemuria Evolutions -->
                  <span v-else-if="cClass[index] === 192">Lumuria Mage</span>
                  <span v-else-if="cClass[index] === 193">Warnage</span>
                  <span v-else-if="cClass[index] === 195">Archmage</span>
                  <span v-else-if="cClass[index] === 199">Mystic Mage</span>
                  <!-- Unknown -->
                  <span v-else-if="cClass[index] === 208">Illusion King</span>
                  <span v-else-if="cClass[index] === 209">Mirage Knight</span>
                  <span v-else-if="cClass[index] === 211">Illusion Master</span>
                  <span v-else-if="cClass[index] === 215">Mystic Knight</span>
                  <span v-else>Unknown</span>
                </div>
                <div class="tablePopup-block">
                  <span>Strength:</span> <span>{{ Strength[index] }}</span>
                </div>
                <div class="tablePopup-block">
                  <span>Dexterity:</span> <span>{{ Dexterity[index] }}</span>
                </div>
                <div class="tablePopup-block">
                  <span>Vitality:</span> <span>{{ Vitality[index] }}</span>
                </div>
                <div class="tablePopup-block">
                  <span>Energy:</span> <span>{{ Energy[index] }}</span>
                </div>
                <div class="tablePopup-block">
                  <span>LDate:</span>
                  <span>{{ LDate[index].slice(0, 10) }}</span>
                </div>
              </div>
            </a>
          </div>
          <div class="tableBlock-conten_lvl">
            <span class="color-purple">{{
              Number(cLevel[index]) + Number(masterLevel[index])
            }}</span>
          </div>
          <div
            class="tableBlock-conten_scr onlinez"
            v-if="ConnectStat[index] === 1"
          >
            Online
          </div>
          <div class="tableBlock-conten_scr offlinez" v-else>Offline</div>
        </div>
      </div>
      <div class="all-button">
        <a href="" class="button">View All</a>
      </div>
    </div>
  </div>
  <!--rankings-->

  <!--forumHome-->
  <div class="forumHome blockHome">
    <!--h2-title-->
    <div class="h2-title h2-title-table flex-s-c">
      <span>Forum Feed</span> <a href="">All news</a>
    </div>

    <div class="forumBlock-content">
      <!--forumBlock-->
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
    </div>
    <!--forumBlock-content-->
  </div>

  <!--socBlockHome-->
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
</template>
<style>
.onlinez {
  font-size: 12px;
  color: #cbff3f;
  text-shadow: 0 0 8px #82e700;
}

.offlinez {
  font-size: 12px;
  color: #ff0000;
  text-shadow: 0 0 8px #e72e00;
}
</style>
<script>
import axios from 'axios';

export default {
  name: 'AsideComponent',
  data() {
    return {
      characters: [],
      cName: [],
      cLevel: [],
      cClass: [],
      masterLevel: [],
      ConnectStat: [],
      Strength: [],
      Energy: [],
      Vitality: [],
      Dexterity: [],
      LDate: [],
    };
  },
  created() {
    this.top10();
  },
  methods: {
    getImagePath(classValue) {
      return require(`../assets/class/${classValue}.png`);
    },
    top10() {
      axios
        .get('/top10')
        .then((response) => {
          this.characters = response.data;
          this.cName = [];
          this.cLevel = [];
          this.cClass = [];
          this.masterLevel = [];
          this.Strength = [];
          this.ConnectStat = [];
          for (let i = 0; i < this.characters.length; i++) {
            this.cName.push(this.characters[i].Name);
            this.cLevel.push(this.characters[i].cLevel);
            this.cClass.push(Number(this.characters[i].Class));
            this.masterLevel.push(this.characters[i].mLevel);
            this.Strength.push(this.characters[i].Strength);
            this.Dexterity.push(this.characters[i].Dexterity);
            this.Vitality.push(this.characters[i].Vitality);
            this.Energy.push(this.characters[i].Energy);
            this.LDate.push(this.characters[i].LDate);
            this.ConnectStat.push(Number(this.characters[i].ConnectStat));
            console.log(
              this.cName,
              this.cLevel,
              this.cClass,
              this.masterLevel,
              this.Strength,
              this.ConnectStat
            );
          }
        })
        .catch((error) => {
          console.log('Error getting top 10 characters:', error);
        });
    },
  },
};
</script>
