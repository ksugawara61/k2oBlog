<template>
  <div id="page-main">
    <div class="page-title">
      <h2>K2Oブログトップ</h2>
    </div>
    <div class="topics">
      <ul>
        <li class="module-card">
          <div class="card-ttl">
            <span class="card-ttl-time"><time datetime="2019-02-10">2019年 2月 10日</time></span>
            <span class="card-ttl-title">
              <a href="https://guide.search.goo.ne.jp">K2Oブログを開設しました。</a>
            </span>
          </div>
          <div class="card-body">
            <span class="card-body-thumb">
              <img src="https://guide.search.goo.ne.jp/wp-content/uploads/sp_tv-220x115.png" alt="テレビ番組ダイレクト機能を追加しました">
            </span>
            <p class="card-body-abstract">
              ここにテキストが入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
            <span class="card-body-more">
              <a class="btn-more" href="#">
                <i class="fa fa-chevron-right"></i>
                続きを読む
              </a>
            </span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
