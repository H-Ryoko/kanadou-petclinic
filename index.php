<?php require('wp-news/wp-blog-header.php'); ?>
<!doctype html>
<html lang="ja">
	<head>
    <meta charset="UTF-8">
    <title>かなどう動物病院</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/top.css">
    <link rel="apple-touch-icon" sizes="180×180" href="assets/image/common/icon.png">
    <link rel="apple-touch-startup-image" href="assets/image/common/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;500;700&family=M+PLUS+Rounded+1c:wght@400;500;700;800;900&display=swap" rel="stylesheet">    <meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">
	</head>

	<body>
    <!--このサイトは学習のため、個人で作成したものです。-->
    <section id="top" class="section-top">
      <picture>
        <source srcset="assets/image/top/top_dog_pc3.png" media="(min-width: 700px)"/>
        <source srcset="assets/image/top/top_dog_sp.png" media="(max-width: 700px)"/>
        <img class="section-top__topimg" src="assets/image/top/top_dog_sp.png" alt="犬の画像">
      </picture>
      <div class="section-top__motto">
        <h1>動物に、心を込めて</h1>
        <p>with all my heart to animals.</p>
      </div>
    </section>
    <header>
      <div class="header">
        <img src="assets/image/common/logo.png" alt="ロゴ">
        <ul class="header__menu-list">
          <li><a href="clinic.html">当院について</a></li>
          <li><a href="consulation.html">診療について</a></li>
          <li><a href="http://www.haru926.jp/kadai_dhf/wp-news/">お知らせ</a></li>
          <li><a href="qa.html">よくあるご質問</a></li>
        </ul>
      </div>
    </header>
    <div class="section-contents">
      <script src="assets/js/sidebar.js"></script>
      <div class="section-contents__button">
        <section class="section-button">
          <div class="section-button__top-box">
            <img class="section-button__top-box__top-docter-image" src="assets/image/top/doctor.png" alt="医者の画像" width="100">
            <div class="section-button__top-box__descriptionbox">
              <h2>動物と暮らす地域の皆様が何でも相談できるホームドクターを目指し、日々診療を行っております。</h2>
              <p>
                診察の姿勢として、飼い主様への説明（病状や薬の内容など）を重視し、治療方法や費用など相談しながら進め、常に診療技術の向上に努めて参ります。<br>ペットの鍼(はり)治療ならびに、通電治療や漢方薬の取扱いも行っております。<br>往診も対応致しますので、お気軽にご相談下さい。<br>また、トリミング・ペットホテルも併設しておりますので、お気軽にご利用下さい。
              </p>
            </div>
          </div>
        </section>
        <section class="button-menubox">
          <div class="button-menubox__menu">
            <h3 class="button-menubox__menu__button-title">CLINIC<br><span>当院について</span></h3>
            <a class="button-menubox__menu__jump-menu" href="clinic.html">
              <div class="button__imgbox">
                <div class="button__img">
                  <img src="assets/image/top/reseption02.png" alt="当院について" width="100">
                </div>
                <div class="button__text">
                  <h4>
                    地域の動物とご家族に愛される<br>獣医師を目指して
                  </h4>
                  <p>
                    明るく居心地が良く、初めての方でも入りやすい空間作りを心がけております。
                  </p>
                </div>
              </div>
              <div class="arrowbox">
                <p class="arrowbox__btnarrow4">当院について</p>
              </div>
            </a>
          </div>
          <div class="button-menubox__menu">
            <h3 class="button-menubox__menu__button-title">CONSULATION<br><span>診療について</span></h3>
            <a class="button-menubox__menu__jump-menu" href="consulation.html">
              <div class="button__imgbox">
                <div class="button__img">
                  <img src="assets/image/top/dog.png" alt="診療について" width="100">
                </div>
                <div class="button__text">
                  <h4>
                    崩れた体内バランスを<br>漢方で調和しながら進める治療
                  </h4>
                  <p>
                    当院は日本ペット中医学研究会に加盟している動物病院で、漢方を用いた治療を取り入れています。
                  </p>
                </div>
              </div>
              <div class="arrowbox">
                <p class="arrowbox__btnarrow4">診療について</p>
              </div>
            </a>
          </div>
        </section>
        
        <section class="section-news">
          <h3>NEWS<span>お知らせ</span></h3>
          <?php
            $args = array(
            'posts_per_page' => 3,
            'paged' => $paged,
            'post_type' => array(
            'post',
            ),
            );
            $the_query = new WP_Query( $args );
          ?>
            <ul class="section-news__newslist">
              <?php if($the_query->have_posts()): ?>
              <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
              <?php
              $category = get_the_category();
              $cat_name = $category[ 0 ]->cat_name;
              $cat_slug = $category[ 0 ]->category_nicename;
              ?>
              <li class="section-news__newslist__post">
              <p class="titleWrap">
                <span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
              </p>
                <span class="title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></span>
              </li>
              <?php endwhile; ?>
              <?php else : ?>
              <p>表示する記事はありませんでした。</p>
              <?php endif; ?>
            </ul>
          <?php wp_reset_postdata(); ?>
          <a class="section-news__more-read" href="http://www.haru926.jp/kadai_dhf/wp-news/">
            <div class="section-news__more-read__img">
              <img src="assets/image/top/news_white.svg" alt="もっと読む" width="100">
            </div>
            <p>もっと読む</p>
          </a>
        </section>
        <section class="section-access">
          <h3>ACCESS<span>アクセス</span></h3>
          <div class="section-access__content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.734124340865!2d130.4360032317514!3d33.56028362977809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354190f93f9025ad%3A0x9904f217376f3606!2z44GL44Gq44Gp44GG5YuV54mp55eF6Zmi!5e0!3m2!1sja!2sjp!4v1632467959612!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            <div class="section-access__content__address">
              <address>〒815-0004<span><br>福岡県 福岡市南区 高木2-2-2</span></address>
              <div class="section-access__content__address__accessmenu">
                <img src="assets/image/top/train.svg" alt="電車の場合" width="100">
                <p>
                  西鉄大牟田線井尻駅から<br>徒歩<span>約10分</span>
                </p>
              </div>
              <div class="section-access__content__address__accessmenu">
                <img src="assets/image/top/bus.svg" alt="バスの場合" width="100">
                <p>
                  西鉄バス「五十川」より<br>徒歩<span>2分ほど</span>
                </p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="assets/js/footer.js"></script>
    <script src="assets/js/header-nav.js"></script>
    <script src="assets/js/header-mb.js"></script>
    <script src="assets/js/top.js"></script>
	</body>
</html>

















