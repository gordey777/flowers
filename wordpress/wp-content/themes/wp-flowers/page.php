<?php get_header(); ?>
  <div class="topline"></div>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


  <?php edit_post_link(); ?>
  <h1 data-page="3" class="content marg"><?php the_title(); ?></h1>

  <div class="simple_page content">
  <?php the_content(); ?>
  </div>


    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
