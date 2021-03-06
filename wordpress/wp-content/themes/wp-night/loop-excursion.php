<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php setlocale(LC_ALL, array('ru_RU.UTF8','ru_RU','russian')); ?>
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
        <?php $date = get_sub_field('date', false, false); $date = new DateTime($date); ?>
        <?php
          // Russian Months
          $ru_months = array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' );
          // English Months
          $en_months = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
          // Get date string from ACF
          $date_arr = explode(" ", get_sub_field('date'));
          // Get the month name
          $month = $date->format('F');
          // Get the array index of the month name
          $month_index = array_search($month, $en_months);
          // Piece together new date string in Russian translation
          $normMonth = $ru_months[$month_index];
        ?>
        <li class="exces-date" data-exces-year="<?php echo $date->format('Y'); ?>" data-exces-month="<?php echo $date->format('m'); ?>" data-exces-date="<?php echo $date->format('d'); ?>">
          <?php echo $date->format('d'); ?> <?php echo $normMonth;?> <?php echo $date->format('Y'); ?>
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
