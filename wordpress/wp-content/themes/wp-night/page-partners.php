<?php /* Template Name: Partners Page */ get_header(); ?>

  <div class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('article-post row'); ?>>

        <h1 class="col-md-12 page-title inner-title"><?php the_title(); ?></h1>

        <?php if( have_rows('partners') ): while ( have_rows('partners') ) : the_row();?>
          <div class="col-md-4 container-partners">
            <?php $image = get_sub_field('partners_logo'); if( !empty($image) ): ?>
              <span class="partners-logo">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </span>
            <?php endif; ?>
            <?php the_sub_field('partners_descr'); ?>
          </div><!-- /.col-md-4 container-partners -->
        <?php endwhile; endif; ?>

      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article class="row">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>
  </div><!-- /.container -->

<?php get_footer(); ?>
