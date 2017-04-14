<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
  <section class="head">
    <div class="subsection">
<!--       <nav>

</nav> -->

      <div class="pictograms woocommerce">
        <div class="phone_number">
          <?php if( have_rows('phone', 53 ) ): ?>
            <?php while ( have_rows('phone', 53 ) ) : the_row(); ?>
              <a href="tel:+<?php the_sub_field('phone_link'); ?>">
                <?php the_sub_field('phone_text'); ?>
              </a>
            <?php  endwhile; ?>
          <?php endif; ?>


        </div>
        <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">

          <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field input_search" placeholder="Введите запрос" value="<?php echo get_search_query(); ?>" name="s" />
          <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
          <input type="hidden" name="post_type" value="product" />
        </form>

        <a id="search_button" href="/search"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/lens.svg"></a>

        <div class="minicart__wrapp">
          <a href="/cart" class="header__cart">
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/cart.svg">

            <?php if ( ! WC()->cart->is_empty() ) : ?>
              <span class="cart_counter"><?php echo sprintf ('%d', WC()->cart->get_cart_contents_count()) ; ?></span>
            <?php endif; ?>
          </a>
          <?php //woocommerce_mini_cart(); ?>
        </div>

        <?php if( have_rows('socials', 53 ) ): ?>
          <div class="contact_icons content">
            <?php while ( have_rows('socials', 53 ) ) : the_row(); ?>
              <a class="soc-icons" href="<?php the_sub_field('link'); ?>">
              <i class="fa <?php the_sub_field('icon'); ?>"></i>
                <?php if( get_sub_field('title') ): ?>
                  <span class="smallphone"><?php the_sub_field('title'); ?></span>
                <?php endif; ?>
              </a>
            <?php  endwhile; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/NiceFlowers_logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

    </div>
    <div class="serv_menu content">
      <div class="submenu">
        <?php wpeHeadNav(); ?>
      </div>
    </div>
  </section>


