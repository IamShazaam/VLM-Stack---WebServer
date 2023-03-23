<template>
  <main class="main">
    <aside>
      <Ranking />
      <ForumFeed />
      <SocButtons />
    </aside>
    <div class="content">
      <div class="h2-title h2-title-content flex-s-c">
        <span>Download</span>
      </div>
      <div class="downloadBlock-content"></div>
    </div>
  </main>
</template>
<script>
import Ranking from '@/components/Ranking.vue';
import ForumFeed from '@/components/ForumFeed.vue';
import SocButtons from '@/components/SocialButtons.vue';

export default {
  name: 'DownloadsList',
  components: {
    Ranking,
    ForumFeed,
    SocButtons,
  },
};
</script>
