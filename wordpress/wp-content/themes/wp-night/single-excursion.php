<?php get_header(); ?>
  <div class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('article-post article-single row'); ?>>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
        <h1 class="col-md-12 page-title inner-title"><?php the_title(); ?></h1>

        <div class="col-md-12">
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
        </div><!-- /.col-md-12 -->

      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article class="row">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>
  </div><!-- /.container -->

<?php get_footer(); ?>
