<?php /* Template Name: Front Page */
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


  <?php if( have_rows('main_slider' ) ): ?>
    <section class="MP_slider">
      <ul class="overview">
        <?php while ( have_rows('main_slider' ) ) : the_row(); ?>
          <?php $image = get_sub_field('image');
          if( !empty($image) ): ?>

            <li style="background-image:url(<?php echo $image['url']; ?>);">
              <div class="content product_info">
                <div class="title"></div>
                <div class="annotation"></div>
                <a href="<?php the_sub_field('link'); ?>" class="button moreinfo"><?php the_sub_field('text'); ?></a>
              </div>
            </li>
          <?php endif; ?>
        <?php  endwhile; ?>
      </ul>
      <div class="arrows content">
        <div class="prev"></div>
        <div class="next"></div>
      </div>
    </section><!--  /.MP_slider -->
  <?php endif; ?>


  <section id="products" class="content product_tabs_section">

    <header>
      <div class="category_title">Рекомендуем</div>
      <ul class="categories">
        <li data-tab="new" class="active">Новые поступления</li>
        <li data-tab="hit">Хиты продаж</li>
        <li data-tab="sale">Скидки</li>
      </ul>
    </header>


    <div id="new" class="tab active">

<?php
  $args = array(
  'post_type' => 'product',
  //'meta_key' => '_featured',
  //'meta_value' => 'yes',
  'posts_per_page' => 99,
  //'post__in'          => array_merge( array( 0 ), wc_get_product_ids_best_selling() )
  );

  $featured_query = new WP_Query( $args );

  if ($featured_query->have_posts()) : ?>

      <?php woocommerce_catalog_ordering(); ?>

      <?php woocommerce_product_loop_start(); ?>

        <?php woocommerce_product_subcategories(); ?>

        <?php   while ($featured_query->have_posts()) :

          $featured_query->the_post(); ?>

          <?php
            /**
             * woocommerce_shop_loop hook.
             *
             * @hooked WC_Structured_Data::generate_product_data() - 10
             */
            do_action( 'woocommerce_shop_loop' );
          ?>

          <?php wc_get_template_part( 'content', 'product' ); ?>

        <?php endwhile; // end of the loop. ?>

      <?php woocommerce_product_loop_end(); ?>

      <?php
        /**
         * woocommerce_after_shop_loop hook.
         *
         * @hooked woocommerce_pagination - 10
         */
        do_action( 'woocommerce_after_shop_loop' );
      ?>

    <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

      <?php
        /**
         * woocommerce_no_products_found hook.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action( 'woocommerce_no_products_found' );
      ?>

    <?php endif; ?>
      <?php wp_reset_query(); // Remember to reset
  ?>


    </div>
    <div id="hit" class="tab">
    </div>
    <div id="sale" class="tab">
    <?php
  $args = array(
  'post_type' => 'product',
  //'meta_key' => '_featured',
  //'meta_value' => 'yes',
  'posts_per_page' => 99,
  'post__in'          => array_merge( array( 0 ), wc_get_product_ids_on_sale() )
  );

  $featured_query = new WP_Query( $args );

  if ($featured_query->have_posts()) : ?>

      <?php woocommerce_catalog_ordering(); ?>

      <?php woocommerce_product_loop_start(); ?>

        <?php woocommerce_product_subcategories(); ?>

        <?php   while ($featured_query->have_posts()) :

          $featured_query->the_post(); ?>

          <?php
            /**
             * woocommerce_shop_loop hook.
             *
             * @hooked WC_Structured_Data::generate_product_data() - 10
             */
            do_action( 'woocommerce_shop_loop' );
          ?>

          <?php wc_get_template_part( 'content', 'product' ); ?>

        <?php endwhile; // end of the loop. ?>

      <?php woocommerce_product_loop_end(); ?>

      <?php
        /**
         * woocommerce_after_shop_loop hook.
         *
         * @hooked woocommerce_pagination - 10
         */
        do_action( 'woocommerce_after_shop_loop' );
      ?>

    <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

      <?php
        /**
         * woocommerce_no_products_found hook.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action( 'woocommerce_no_products_found' );
      ?>

    <?php endif; ?>
      <?php wp_reset_query(); // Remember to reset
  ?>
    </div>
    <div class="button_wrap">
      <div class="button"><a href="http://flowerscaffe.ru/search/allproducts">Показать всё&nbsp;&nbsp;&gt;</a></div>
    </div>





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

<?php get_footer(); ?>
