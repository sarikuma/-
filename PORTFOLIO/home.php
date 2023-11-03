<?php get_header(); ?>


<main class="content">

  <!-- mv -->
  <div class="mv">
    <div class="mv-container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/RisaShimizu.png" alt="メイン画像">
    </div>
  </div>
  <!-- /mv -->

  <!-- works -->
  <section class="works section" id="works">
    <div class="container">
      <h2 class="title">WORKS</h2>
      <div class="works-list">
        <a class="works-item" href="sample-page/works-1">
          <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/ProfileSiteLP1.png"
              alt="php1" /></div>
          <p class="works-name">My Profile siteについて</p>
          <!--<p class="works-info">HTML/CSS/JavaScript/WordPress/PHP/レスポンシブ対応</p>-->
        </a>
        <a class="works-item" href="sample-page/works-2">
          <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/Gelato Sarikuma.png"
              alt="php2" /></div>
          <p class="works-name">Webサイト制作</p>
          <!--<p class="works-info">Figma</p>-->
        </a>
        <a class="works-item" href="sample-page/works-3">
          <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/名刺.png"
              alt="WordPress" /></div>
          <p class="works-name">名刺制作</p>
          <!--<p class="works-info">Canva</p>-->
        </a>
        <a class="works-item" href="sample-page/works-4">
          <div class="works-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works/広告・バナー1.png"
              alt="Photoshop" /></div>
          <p class="works-name">広告・バナー</p>
          <!--<p class="works-info">Photoshop</p>-->
        </a>
      </div>
    </div>
  </section>
  <!-- /works -->

  <!-- skill -->
  <section class="skill section" id="skill">
    <div class="container">
      <h2 class="title">SKILL</h2>
      <div class="skill-list">
        <div class="skill-item">
          <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill/html.png" alt="html"></p>
          <div class="skill-body">
            <h3 class="skill-name">HTML/CSS</h3>
            <p class="skill-text">
              スマホで見ても表示崩れのないレスポンシブ対応も可能です。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill/wordpress.png"
              alt="wordpress"></p>
          <div class="skill-body">
            <h3 class="skill-name">WordPress</h3>
            <p class="skill-text">
              WordPress製の店舗HP・企業HP・メディアサイトなど、Webサイトを0から構築することが可能です。
            </p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill/js.png" alt="javascript">
          </p>
          <div class="skill-body">
            <h3 class="skill-name">JavaScript</h3>
            <p class="skill-text">
              お問い合わせフォームや自動スクロールなど動きのあるWebサイトを作る事が可能です。</p>
          </div>
        </div>
        <div class="skill-item">
          <p class="skill-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill/photoshop.png"
              alt="photoshop"></p>
          <div class="skill-body">
            <h3 class="skill-name">Adobe Photoshop</h3>
            <p class="skill-text">
              Webサイトに必要不可欠なクリエイティブバナーを作ることが可能です。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /skill -->

  <!-- about -->
  <section class="about section" id="about">
    <div class="container">
      <h2 class="title">ABOUT</h2>
      <div class="profile">
        <p class="profile-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpg" alt="about">
        </p>
        <div class="profile-body">
          <p>
            Risa Shimizu
          </p>
          <p>
            埼玉県在住。2018年より5年間、調剤薬局の事務として務めておりました。趣味はスノーボードです。短大の時代からスノーボードを始め、毎シーズン月に数回は行っております。冬にしか出来ないので、他の季節にはスケートボードをすることもあります。また、友人に誘われゴルフを最近始めました。1年中趣味に没頭できることで日々のストレスを休日で発散しています。<!--そして特技は早起きです。休みの日でも毎朝6時に起きてストレッチをしたりして1日を気持ちよく始めることができます。-->今現在、予てより興味があったWebサイト制作を2023年5月よりスクールで学んでおります。Web制作におけるデザイン、コーディング、スマートフォンサイト対応、WordPressなどが得意分野です。より良いWebサイトを制作できるように、丁寧で柔軟な対応を心掛けております。ぜひお気軽にお問い合わせください。
          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- contact -->
  <section class="contact section" id="contact">
    <div class="container">
      <h2 class="title">CONTACT</h2>
      <p class="lead">
        採用やお仕事のご相談など、<br class="sp-only">お気軽にご連絡ください。
      </p>
      <form action="richapyi.0423@icloud.com">
        <div>
          <div class="contact-heading">
            <label class="contact-label">お名前</label>
          </div>
          <div>
            <input type="text" name="name" class="contact-textbox">
          </div>
        </div>
        <div>
          <div class="contact-heading">
            <label class="contact-label">メールアドレス（半角）</label>
          </div>
          <div>
            <input type="text" name="email" class="contact-textbox">
          </div>
        </div>
        <div>
          <div class="contact-heading">
            <label class="contact-label">件名</label>
          </div>
          <div>
            <input type="text" name="tel" class="contact-textbox">
          </div>
        </div>
        <div>
          <div class="contact-heading">
            <label class="contact-label">お問い合わせ内容</label>
          </div>
          <div>
            <textarea class="contact-textarea" name="message"></textarea>
          </div>
        </div>
        <div>
          <input type="image" src="<?php echo get_template_directory_uri(); ?>/img/送信する.png" class="soushin" alt="送信する">
        </div>
      </form>
    </div>
  </section>
  <!-- /contact -->
  <div class="page-top" id="js-page-top">
    <span class="material-icons-outlined">expand_less</span>
  </div>
</main>

<?php get_footer(); ?>