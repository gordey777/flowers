<?php /* Template Name: Individual Order */ get_header(); ?>

  <div class="topline"></div>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php edit_post_link(); ?>
      <div class="ind_wrapp">
        <h1 class="content"><?php the_title(); ?></h1>

        <div class="simple_page content individual_content">
          <div class="bg_wrapp">
            <?php the_content(); ?>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="36" title="Индивидуальный заказ"]'); ?>
        </div>

      </div>
    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

