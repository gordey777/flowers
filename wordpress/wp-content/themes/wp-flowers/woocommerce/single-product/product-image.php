<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
$full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
$thumbnail_post    = get_post( $post_thumbnail_id );
$image_title       = $thumbnail_post->post_content;
$placeholder       = has_post_thumbnail() ? 'with-images' : 'without-images';
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . $placeholder,
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>


    <div id="image-block">
  		<?php
  		$attributes = array(
  			'title'                   => $image_title,
  			'data-src'                => $full_size_image[0],
  			'data-large_image'        => $full_size_image[0],
  			'data-large_image_width'  => $full_size_image[1],
  			'data-large_image_height' => $full_size_image[2],
  		);

      if ( has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>" id="bigpic" itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="main_image">
        <span class="span_link no-print"></span>
      <?php else:?>
        <?php echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img class="main_image" src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID ); ?>
      <?php endif; ?>

    </div><!-- .image-block -->

      <div  id="views_block" class="slider">
        <div class="thumbs_nav views_block_up thumbs_nav_hide"><i class="fa fa-chevron-up"></i></div>

        <div id="thumbs_list">
        <!-- <div class="scroller up"><span></span></div> -->
          <ul class="icons">

            <!-- First Image -->
            <?php if ( has_post_thumbnail()) : ?>
              <li class="thumbnail_item slide active">
               <a href="<?php echo get_the_post_thumbnail_url( '', 'full' ); ?>" rel="lightbox">
                <img src="<?php echo get_the_post_thumbnail_url( '', 'small' ); ?>" itemprop="image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
              </a>
             </li>
            <?php else:?>
            <?php endif; ?>


            <?php do_action( 'woocommerce_product_thumbnails' ); ?>
          </ul>
        <!-- <div class="scroller down"><span></span></div> -->
        </div>
        <div class="thumbs_nav views_block_down thumbs_nav_hide"><i class="fa fa-chevron-down"></i></div>
      </div><!-- .views_block -->
