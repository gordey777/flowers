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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
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

<div id="product-<?php the_ID(); ?>" <?php //post_class(); ?>>
      <div class="title"><?php the_title(); ?></div>
      <div class="infoblock">
        <div class="main_info">

  <?php
    /**
     * woocommerce_before_single_product_summary hook.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    do_action( 'woocommerce_before_single_product_summary' );
  ?>


          <section class="product_detail">
            <?php woocommerce_output_product_data_tabs(); ?>
          </section>

        </div>
        <aside>
  <div class="summary entry-summary">

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

  </div><!-- .summary -->
        </aside>
      </div>


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




	<?php
		woocommerce_output_related_products();
	?>

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
