<?php /* Template Name: Front Page */
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
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



<!-- <?php if( have_rows('product_slider' ) ): ?>


    <?php while ( have_rows('product_slider' ) ) : the_row(); ?>
        <div class="item">
          <a href="<?php the_sub_field('product_link'); ?>">
            <?php $image = get_sub_field('product_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </a>
        </div>
      <?php  endwhile; ?>

    <?php endif; ?> -->


  <section id="products" class="content product_tabs_section">

<?php
  $args = array(
  'post_type' => 'product',
  //'meta_key' => '_featured',
  //'meta_value' => 'yes',
  'posts_per_page' => 99
  );

  $featured_query = new WP_Query( $args );

  if ($featured_query->have_posts()) : ?>


<form class="woocommerce-ordering" method="get">
  <select name="orderby" class="orderby">
    <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
      <option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
    <?php endforeach; ?>
  </select>
  <?php wc_query_string_form_fields( null, array( 'orderby', 'submit' ) ); ?>
</form>




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
  <?php
    /**
     * woocommerce_after_main_content hook.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action( 'woocommerce_after_main_content' );
  ?>

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
