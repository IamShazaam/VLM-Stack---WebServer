<template>
  <main class="main">
    <aside>
      <Aside />
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
import Aside from '@/components/Aside.vue';

export default {
  name: 'DownloadsList',
  components: {
    Aside,
  },
};
</script>
