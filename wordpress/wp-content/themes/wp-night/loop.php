<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 looper'); ?>>

    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
    </a><!-- /post thumbnail -->

    <h2 class="inner-title looper-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2><!-- /post title -->

    <span class="date"><?php the_time('j F Y'); ?> <span><?php the_time('G:i'); ?></span></span>
    <?php wpeExcerpt('wpeExcerpt40'); ?>

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div class="col-md-12">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
