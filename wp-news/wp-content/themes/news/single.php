<?php get_header() ?>
      <div class="contents__right">
        <section class="section-top">
          <h1>お知らせ</h1>
          <p>NEWS</p>
          <img src="<?php echo home_url("../assets/image/news/news_green.svg"); ?>" alt="聴診器">
        </section>
        <section class="section-article">
          <?php if(have_posts()): the_post(); ?>
          <article <?php post_class( 'article-content' ); ?>>
            <div class="date-title">
              <!--投稿日を取得-->
              <span class="single-article-date">
                <i class="far fa-clock"></i>
                <time
                datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                <?php echo get_the_date(); ?>
                </time>
              </span>
              <!--タイトル-->
              <h1><?php the_title(); ?></h1>
            </div>
            <!--著者を取得-->
            <span class="single-article-author">
              <i class="fas fa-user"></i><?php the_author(); ?>
            </span>
            <div class="single-text">
              <!--本文取得-->
              <?php the_content(); ?>
            </div>
            <!--カテゴリ取得-->
            <?php if(has_category() ): ?>
            <span class="single-cat-data">
              <?php echo get_the_category_list( ' ' ); ?>
            </span>
            <?php endif; ?>
          </article>
          <?php endif; ?>
        </section>
      </div>
    </div>
    <?php get_footer() ?>
    <div id="header-nav">
      <div class="menu-box">
        <img src="<?php echo home_url("../assets/image/common/logo.png"); ?>" alt="ロゴ" width="100">
        <ul>
          <li><a href="<?php echo home_url("../index.php"); ?>">トップ</a></li>
          <li><a href="<?php echo home_url("../clinic.html"); ?>">当院について</a></li>
          <li><a href="<?php echo home_url("../consulation.html"); ?>">診療について</a></li>
          <li><a href="<?php echo home_url(); ?>">お知らせ</a></li>
          <li><a href="<?php echo home_url("../qa.html"); ?>">よくあるご質問</a></li>
        </ul>
      </div>
    </div>
    <div class="nav-button">
      <a href="https://petlife.asia/hospital/9337/" target="_blank" class="nav-button__reserve-button">
        <p>ご予約はこちら</p>
        <img src="<?php echo home_url("../assets/image/common/reserve.svg"); ?>" alt="予約の画像" width="100">
      </a>
      <div class="nav-button__hamburger-button">
        <div class="nav-button__hamburger-button__box">
          <span class="nav-button__hamburger-button__box__line" id="line1"></span>
          <span class="nav-button__hamburger-button__box__line" id="line2"></span>
          <span class="nav-button__hamburger-button__box__line" id="line3"></span>
        </div>
      </div>
    </div>
    <script src="<?php echo home_url("../assets/js/top.js"); ?>"></script>
  </body>
</html>

