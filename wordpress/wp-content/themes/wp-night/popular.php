  <h4 class="col-md-12 poppost-title">Популярные экскурии</h4>
  <?php
    $args = array(
      'post_type'    => 'excursion',
      'orderby'      => 'meta_value',
      'meta_key'     => 'post_views_count',
      'order'        => 'DESC',
      'posts_per_page' => 3,
      'post_status'  => 'publish'
    );
    $ranking = 0;
    query_posts($args); if ( have_posts() ) : while ( have_posts()) : the_post(); $ranking++; ?>

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
    }
  ?>

  <div class="col-md-4 popular-posts">
    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>
    </a><!-- /post thumbnail -->

    <h3>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> (<?php echo $exname; ?>)</a>
    </h3><!-- /post title -->

    <?php wpeExcerpt('wpeExcerpt10'); ?>
    <a href="<?php the_permalink(); ?>" class="goto">Перейти</a>
  </div><!-- /.col-md-4 popular-posts -->


<?php endwhile; endif; wp_reset_query(); ?>
