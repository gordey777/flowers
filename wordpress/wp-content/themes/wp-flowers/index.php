<?php get_header(); ?>
  <section class="MP_slider">
    <ul class="overview">
      <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide_UGjGv5.jpg);">
        <div class="content product_info">
          <div class="title"></div>
          <div class="annotation"></div>
          <a href="http://flowerscaffe.ru/---" class="button moreinfo">Наша мастерская находится на оптовом цветочном складе<br>У нас ВСЕГДА в наличии ЛЮБЫЕ цветы</a>
        </div>
      </li>
      <li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/slide_oTYCut.jpg);">
        <div class="content product_info">
          <div class="title"></div>
          <div class="annotation"></div>
          <a href="http://flowerscaffe.ru/3333" class="button moreinfo">Наша мастерская находится на оптовом цветочном складе<br>У нас ВСЕГДА в наличии ЛЮБЫЕ цветы</a>
        </div>
      </li>
    </ul>
    <div class="arrows content">
      <div class="prev"></div>
      <div class="next"></div>
    </div>
  </section>
  <article>

    <h1 class="ctitle"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>

  </article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
