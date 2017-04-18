<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see       https://docs.woocommerce.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

?>
  <?php
  /**
   * woocommerce_before_single_product hook.
   *
   * @hooked wc_print_notices - 10
   */
   do_action( 'woocommerce_before_single_product' );

   if ( post_password_required() ) {
    echo get_the_password_form();
    return;
   }
?>
    <div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="title">
        <?php the_title(); ?>
      </div>
      <div class="infoblock">
        <div class="main_info">
          <figure class="woocommerce-product-gallery__wrapper">
            <?php
              /**
               * woocommerce_before_single_product_summary hook.
               *
               * @hooked woocommerce_show_product_sale_flash - 10
               * @hooked woocommerce_show_product_images - 20
               */
              do_action( 'woocommerce_before_single_product_summary' );
            ?>
          </figure>
          <section class="product_detail">
            <?php woocommerce_output_product_data_tabs(); ?>
          </section>
        </div>
        <aside>
          <section class="priceblock">
            <div class="price-item">
              <header>Цена</header>
              <?php woocommerce_template_single_price() ?>
            </div>
<!--             <div class="price-item-border"></div>
<div class="price-item-promo">
  <header>Промоцена</header>
  <div class="price">5 985 <span class="rouble">i</span></div>
</div> -->

            <?php woocommerce_template_single_meta() ?>


            <div class="buttons">
            <?php
              /**
               * woocommerce_single_product_summary hook.
               *
               * @hooked woocommerce_template_single_title - 5
               * @hooked woocommerce_template_single_rating - 10
               * @hooked woocommerce_template_single_price - 10
               * @hooked woocommerce_template_single_excerpt - 20
               * @hooked woocommerce_template_single_add_to_cart - 30
               * @hooked woocommerce_template_single_meta - 40
               * @hooked woocommerce_template_single_sharing - 50
               * @hooked WC_Structured_Data::generate_product_data() - 60
               */
              do_action( 'woocommerce_single_product_summary' );
            ?>
              <div class="tocart-bottom">
                <p>Добавьте букет в корзину и продолжите просмотр каталога. Позже вы сможете оформить заказ в корзине.</p>
              </div>
<!--               <span class="button filled fastbuy">Оформить заказ</span>
<div class="fastbuy-bottom">
  <p>Определились с покупкой? Оформите Ваш заказ в корзине!</p>
</div> -->
            </div>
          </section>
          <section class="delivery">

            <div class="variant wide">
              <img alt="" class="ico" src="">
              <div>
                <span class="name">Доставка заказа, курьерской службой, цветочного бутика Nice Flowers - Гарантия качества и выполнения нюансов заказа, а так же безупречного состояния букета!</span>
                <span class="descr"></span>
              </div>
            </div>

            <div class="variant">
              <img alt="" class="ico" src="<?php echo get_template_directory_uri(); ?>/img/delivery_car.svg">
              <div>
                <span class="name"></span>
                <span class="descr">
                  <p>Доставка день в день осуществляется до 14:00.</p>
                </span>
              </div>
            </div>
            <div class="variant wide">
              <img alt="" class="ico" src="">
              <div>
                <span class="name">Доставка по Москве в пределах МКАД - бесплатно</span>
                <span class="descr"></span>
              </div>
            </div>
            <div class="variant wide">
              <img alt="" class="ico" src="">
              <div>
                <span class="name">Доставка по Москве ( в пределе 10 км от МКАД ) 350 рублей</span>
                <span class="descr"></span>
              </div>
            </div>
<!--             <div class="variant wide">
  <img alt="" class="ico" src="">
  <div>
    <span class="name">Подмосковье (За Мкад) от 10 до 30 км - бесплатно</span>
    <span class="descr"></span>
  </div>
</div> -->

          </section>







        </aside>
      </div>
      <?php if( have_rows('block_about_us', 53 ) ): ?>
        <section id="about_us" class="content">
          <?php while ( have_rows('block_about_us', 53 ) ) : the_row(); ?>
            <div class="block">
              <div class="ico">
                <?php $image = get_sub_field('image');
            if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>">
                  <?php endif; ?>
              </div>
              <h2><?php the_sub_field('title'); ?></h2>
              <span><?php the_sub_field('text'); ?></span>
            </div>
            <?php  endwhile; ?>
        </section>
        <?php endif; ?>
          <?php woocommerce_output_related_products(); ?>
    </div><!-- #product-<?php the_ID(); ?> -->
    <?php do_action( 'woocommerce_after_single_product' ); ?>
