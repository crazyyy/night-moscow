<?php get_header(); ?>
  <div class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('article-post article-single article-excursion row'); ?>>
        <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

        <?php $terms = get_the_terms( $post->ID, 'categories' ); $term = array_pop($terms); $termID= $term->term_id;
          if ($termID == 76 ) {
            $exname = 'пешеходная';
          } else if ($termID == 80 ) {
            $exname = 'автобусная и пешеходная';
          } else if ($termID == 78 ) {
            $exname = 'автобусная экскурсия';
          } else if ($termID == 75 ) {
            $exname = 'объект';
          } else if ($termID == 77 ) {
            $exname = 'однодневная экскурсия';
          } else if ($termID == 76 ) {
            $exname = 'пешеходная с посещением объекта';
          } else if ($termID == 83 ) {
            $exname = 'Экскурсии для иностранцев';
          }
        ?>

        <h1 class="col-md-12 page-title inner-title sinle-exc-title"><?php the_title(); ?>  <span class="type"><?php $image = get_field('image', $term ); ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />(<?php echo $exname; ?>)</span></h1>

        <div class="col-md-3 excursion-time excursion-level-zero">
          Продолжительность:
          <span><?php the_field('time'); ?></span>
        </div><!-- /.col-md-3 -->

        <div class="col-md-9 excursion-guide excursion-level-zero">
          Экскурсовод:
          <span><?php the_field('guide'); ?></span>
        </div><!-- /.col-md-9 -->

        <div class="col-md-6 excursion-gallery excursion-level-one">
          <?php $i = 0; if( have_rows('gallery') ): while ( have_rows('gallery') ) : the_row(); ?>
            <?php if ( $i === 0 ) { ?>
              <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                <span class="gallery-main">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </span>
              <?php endif; ?>
            <?php } ?>
          <?php $i++; endwhile; endif; ?>

          <ul class="gallery-choose">
            <?php if( have_rows('gallery') ): while ( have_rows('gallery') ) : the_row(); ?>
              <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                <li dataimage="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>
              <?php endif; ?>
            <?php  endwhile; endif; ?>
          </ul><!-- /.gallery-choose -->
          <div class="excursion-content">
            <?php the_content(); ?>
          </div>
          <?php edit_post_link(); ?>
          <div class="row">
            <div class="col-md-6 subtitle">
              Начало экскурсии:
            </div><!-- /.col-md-6 subtitle -->
            <div class="col-md-6 subtitle">
              Окончание экскурсии:
            </div><!-- /.col-md-6 subtitle -->
            <div class="col-md-6">
              <?php the_field('start'); ?>
            </div>
            <div class="col-md-6">
              <?php the_field('ends'); ?>
            </div>
          </div>
        </div><!-- /.col-md-6 excursion-gallery -->

        <div class="col-md-6 excursion-price excursion-level-one">
          <h6 class="price-title">Стоимость:</h6>
          <ul class="price-list">
            <li>Школьникам<span><?php the_field('price_scool'); ?></span></li>
            <li>Студенты<span><?php the_field('price_stud'); ?></span></li>
            <li>Взрослые<span><?php the_field('price_adult'); ?></span></li>
            <li>Пенсионеры<span><?php the_field('price_price'); ?></span></li>
          </ul>
          <h6 class="price-title">Ближайшие даты экскурсий:</h6>
          <table>
            <tr>
              <th><span>Дата</span></th>
              <th><span>Время</span></th>
              <th></th>
            </tr>
            <?php if( have_rows('timeadndate') ): while ( have_rows('timeadndate') ) : the_row(); ?>
              <tr>
                <td class="ex-date">
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
                  <?php echo $date->format('d'); ?> <?php echo $normMonth;?> <?php echo $date->format('Y'); ?>
                </td>
                <td class="ex-time"><?php $format = "H:i"; $timestamp” = get_sub_field('time'); echo date_i18n( $format, $timestamp” ); ?></td>
                <td><button class="btn btn-order">Записаться на экскурсию</button></td>
              </tr>
            <?php  endwhile; endif; ?>
          </table>
        </div><!-- /.col-md-6 excursion-price -->

        <?php if (get_field('video')) { ?>
          <div class="col-md-6 excursion-map excursion-level-two">
        <?php } else { ?>
          <div class="col-md-12 excursion-map excursion-level-two">
        <?php } ?>
          <?php $location = get_field('maps'); if( !empty($location) ): ?>
          <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          </div>
          <?php endif; ?>
        </div><!-- /.col-md-6 excursion-map excursion-level-two -->
        <?php if (get_field('video')) { ?>
          <div class="col-md-6 excursion-video excursion-level-two">
            <iframe width="350" src="https://www.youtube.com/embed/<?php the_field('video'); ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          </div><!-- /.col-md-6 excursion-video excursion-level-two -->
        <?php } ?>
        <?php setPostViews(get_the_ID());?>

        <?php get_template_part('popular'); ?>


      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article class="row">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>
  </div><!-- /.container -->

<?php get_footer(); ?>
