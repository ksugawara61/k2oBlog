<template>
  <header id="page-header">
    <div id="header-visual">
      <div class="visual-text">
        <h1 id="site-title">K2O Blog</h1>
        <p id="catchcopy">自分を破壊する一歩手前の負荷が、自分を強くしてくれる。</p>
      </div>
      <img src="https://wondertrip.jp/img/p/pixta_4702603_M.jpg" alt="">
    </div>
    <nav class="global-navi">
      <ul>
        <li
        v-for="page in pages"
        v-bind:key="page.path"
        v-bind:class="{'current': currentPage === page.path}"
        >
        <a v-bind:href="page.path">{{ page.name }}</a>
        </li>
  		</ul>
	  </nav>
  </header>
</template>

<script>
export default {
  props: {
    currentPage: {
      type: String,
      required: true
    }
  },

  data: function() {
    return {
      pages: [
        {
          path: "home",
          name: "ホーム"
        },
        {
          path: "service",
          name: "サービス"
        },
        {
          path: "tool",
          name: "ツール"
        }
      ]
    }
  },

  mounted() {
    console.log('Component mounted.')
    console.log(this.currentPage)
  }
}
</script>
