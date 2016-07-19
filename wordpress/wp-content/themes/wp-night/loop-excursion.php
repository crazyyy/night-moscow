<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php $terms = get_the_terms( $post->ID, 'categories' ); $term = array_pop($terms); $catId = $term->term_id; $cat_class = 'col-md-6 looper catid_'.$catId; ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class( $cat_class); ?>>

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
    <?php wpeExcerpt('wpeExcerpt40'); ?>
    <ul class="exces-dates">
      <?php if( have_rows('timeadndate') ): while ( have_rows('timeadndate') ) : the_row(); ?>
        <li>
          <?php $date = get_sub_field('date', false, false); $date = new DateTime($date); echo $date->format('d F Y'); ?>
        </li>
      <?php  endwhile; endif; ?>
    </ul><!-- /.exces-dates -->
    <ul class="excurse-about">
      <li class="exc-time">Продолжительность:<span><?php the_field('time'); ?></span></li>
      <li class="exc-guide">Экскурсовод:<span><?php the_field('guide'); ?></span></li>
      <li class="exc-type">
        <?php $catname= $term->name; echo $catname; ?>
      </li>
      <li class="exc-order"><button class="btn btn-green btn-order">Записаться на экскурсию</button></li>
    </ul>

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div class="col-md-12">
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
