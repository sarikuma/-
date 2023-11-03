<?php get_header(); ?>

    <main class="content">

      <article class="article">
        <div class="article-container">
          <h2 class="article-title">Webサイト制作</h2>
          <div class="article-body">
            <p style="text-align: center;">
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/Gelato Sarikuma.png" alt="">
            </p>
            <p>
              自身で作成した架空のジェラート屋さんのHPです。
            </p>
            <h3>URL</h3>
            <p><a href="http://gelato-sarikuma.local/" target="_blank" rel="noopener">こちらから</a></p>
            <h3>担当</h3>
            <p>コーディング</p>
            <h3>サイトの目的</h3>
            <p>企業紹介と問い合わせ窓口</p>
            <h3>使用技術</h3>
            <p>WordPress</p>
            <h3>デザインについて</h3>
            <p>
              親しみやすいアットホームな雰囲気を出すために、実際の写真を用いて掲載しました。
              <br>メニューに写真や表を用いて誰でも分かるように意識して作成しました。
            </p>
          </div>
          <div class="home-link">
          <a href="<?php echo home_url(); ?>/#works">Works一覧へ</a>
          </div>
        </div>
      </article>

      <div class="page-top" id="js-page-top">
        <span class="material-icons-outlined">expand_less</span>
      </div>
    </main>

    <?php get_footer(); ?>