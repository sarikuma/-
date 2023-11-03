<?php get_header(); ?>

    <main class="content">

      <article class="article">
        <div class="article-container">
          <h2 class="article-title">My Profile siteについて</h2>
          <div class="article-body">
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/works/profileSiteLP2.png" alt="">
            </p>
            <p>
              
            </p>
            <h3>サイトのPL</h3>
            <p><a href="https://www.figma.com/proto/CeQoQ36wzAPsB4jC7gT84r/%E7%84%A1%E9%A1%8C?type=design&node-id=1-2&t=UCHehzIXNnbhuWkL-1&scaling=min-zoom&page-id=0%3A1&mode=design" target="_blank" rel="noopener">こちらから</a></p>
            <h3>担当</h3>
            <p>コーディング</p>
            <h3>サイトの目的</h3>
            <p>自己紹介</p>
            <h3>使用技術</h3>
            <p>HTML/CSS/JavaScript/WordPress/PHP/レスポンシブ対応</p>
            <h3>デザインについて</h3>
            <p>
              エレガントなデザインで、使用カラーも３色（白・水色・グレー）のみとし、サイト全体の統一感を出しました。
            </p>
            <p>
              グローバルナビゲーション（上部メニュー）を押したときの自動スクロール処理。また、お問い合わせフォームは私自身のメールへ送信される処理を実装しております。
            </p>
            <h3>コーディングについて</h3>
            <p>
              スマートフォンでも見やすくするためレスポンシブ対応を施しております。
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