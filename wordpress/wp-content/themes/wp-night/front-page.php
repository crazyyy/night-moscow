<?php /* Template Name: Home Page */ get_header(); ?>

  <div class="container">

    <div class="row">

      <h2 class="col-md-12 our-exc-titles">Наши экскурсии</h2>

      <div class="row our-exc-container">
        <?php $args = array('post_type'    => 'excursion','posts_per_page' => 4,'post_status'  => 'publish'); query_posts($args); if ( have_posts() ) : while ( have_posts()) : the_post(); ?>

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
        <?php endwhile; endif; wp_reset_query(); ?>

      </div><!-- /.row our-exc-container -->
    </div><!-- /.row -->

    <div class="row">
      <div class="col-md-6 small-reviews frontpage-small">
      <div class="row">
        <h4 class="cold-md-12">Отзывы наших клиентов</h4>

        <?php if( have_rows('reviews') ): while ( have_rows('reviews') ) : the_row();?>
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
          <div class="col-md-6 container-reviews">
            <h6><?php the_sub_field('name'); ?> <span><?php echo $date->format('d'); ?> <?php echo $normMonth;?> <?php echo $date->format('Y'); ?></span></h6>
            <?php the_sub_field('review_short'); ?>
          </div><!-- /.col-md-4 container-reviews -->
        <?php endwhile; endif; ?>

      </div>

      </div><!-- /.col-md-6 small-reviews -->

      <div class="col-md-6 small-partners frontpage-small">

        <div class="row">
          <h4 class="col-md-12">Наши партнеры</h4>

          <?php query_posts("page_id=25"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if( have_rows('partners') ): while ( have_rows('partners') ) : the_row();?>
              <div class="col-md-4 container-partners container-partners-home">
                <?php $image = get_sub_field('partners_logo'); if( !empty($image) ): ?>
                  <span class="partners-logo">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </span>
                <?php endif; ?>
              </div><!-- /.col-md-4 container-partners -->
            <?php endwhile; endif; ?>

          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>

        </div>
      </div><!-- /.col-md-6 small-partners -->

      <h6 class="col-md-12 oure-blog-title"><span>Наш блог <a href="<?php echo home_url(); ?>/blog">Все записи</a></span></h6>

      <?php query_posts("showposts=3&cat=1"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-4 ourblogitem">

          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->

          <h3 class="inner-title looper-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h3><!-- /post title -->

          <span class="date"><?php the_time('j F Y'); ?></span>
          <a href="<?php the_permalink(); ?>" class="read-full">Читать полностью</a>

        </div><!-- /.col-md-4 ourblogitem -->
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>

      <div class="col-md-12 main-content">
        <?php the_content(); ?>
      </div><!-- /.col-md-12 main-content -->

    </div><!-- /.row -->




  </div><!-- /.container -->

<?php get_footer(); ?>
