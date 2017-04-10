<?php get_header(); ?>
  <section class="MP_slider">
    <ul class="overview">
      <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide_UGjGv5.jpg);">
        <div class="content product_info">
          <div class="title"></div>
          <div class="annotation"></div>
          <a href="#/---" class="button moreinfo">Наша мастерская находится на оптовом цветочном складе<br>У нас ВСЕГДА в наличии ЛЮБЫЕ цветы</a>
        </div>
      </li>
      <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide_oTYCut.jpg);">
        <div class="content product_info">
          <div class="title"></div>
          <div class="annotation"></div>
          <a href="#/3333" class="button moreinfo">Наша мастерская находится на оптовом цветочном складе<br>У нас ВСЕГДА в наличии ЛЮБЫЕ цветы</a>
        </div>
      </li>
    </ul>
    <div class="arrows content">
      <div class="prev"></div>
      <div class="next"></div>
    </div>
  </section>

  <section id="products" class="content product_tabs_section">


    <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </section>

  <section id="about_us" class="content">
    <div class="block">
      <div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/img/1.svg"></div>
      <h2>Бесплатная доставка</h2>
      <span>Бесплатная доставка <br>в пределах МКАД.</span>
    </div>
    <div class="block">
      <div class="ico ico2"><img src="<?php echo get_template_directory_uri(); ?>/img/2.svg"></div>
      <h2>Профессионалы</h2>
      <span>Профессиональные,<br> опытные флористы.<br>которые воплотят ваши пожелания<br> в цветочной композиции.</span>
    </div>
    <div class="block">
      <div class="ico ico3"><img src="<?php echo get_template_directory_uri(); ?>/img/3.svg"></div>
      <h2>Самые свежие цветы</h2>
      <span>Всегда свежие цветы <br>и оригинальные букеты</span>
    </div>
  </section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
