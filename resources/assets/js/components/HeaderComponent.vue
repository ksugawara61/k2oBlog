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
        <li class="current"><a href="home">ホーム</a></li>
			  <li><a href="services">サービス</a></li>
			  <li><a href="tools">ツール</a></li>
  		</ul>
	  </nav>
  </header>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
