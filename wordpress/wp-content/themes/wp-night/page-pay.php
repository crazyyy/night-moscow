<?php /* Template Name: Pay Page */ get_header(); ?>

  <div class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('article-post article-payment row'); ?>>

        <h1 class="col-md-12 page-title inner-title"><?php the_title(); ?></h1>
        <h6 class="col-md-12 payment-descr">Как попасть на экскурсию:</h6>

        <?php $i = 1; if( have_rows('steaps') ): while ( have_rows('steaps') ) : the_row();?>
          <div class="col-md-4 payment-steps">
            <span class="payment-steps-number"><?php echo $i; ?></span>
            <?php the_sub_field('steap'); ?>
          </div><!-- /.col-md-4 payment-steps -->
        <?php $i++; endwhile; endif; ?>

        <div class="col-md-12"></div>

        <div class="col-md-4 payment-thumbs">
          <?php the_post_thumbnail(); ?>
        </div><!-- /.col-md-4 -->

        <div class="col-md-8 payment-content">
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
        </div><!-- /.col-md-8 -->


      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article class="row">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>
  </div><!-- /.container -->

<?php get_footer(); ?>
