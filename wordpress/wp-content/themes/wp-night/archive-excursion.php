<?php get_header(); ?>

  <div class="container">
    <article class="article-post row">

      <h2 class="col-md-12 cat-title inner-title">Наши экскурсии</h2>
      <div class="col-md-3 cat-exc-cal excursion-cat-zero">
        <?php get_template_part('inc-calendar'); ?>
      </div><!-- /.col-md-3 cat-exc-cal -->
      <div class="col-md-9 cat-exc-choos-disabled excursion-level-zero">
        <h4>Выберите вид экскурсии</h4>
        <ul>
          <?php $terms = get_terms( array( 'taxonomy' => 'categories', 'hide_empty' => false,) ); foreach ($terms as $term) { ?>
            <li>
              <a href="<?php echo home_url(); ?>/types/<?php echo $term->slug; ?>">
                <?php $image = get_field('image', $term );  ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php ?>
              </a>
              <span><?php echo $term->name; ?></span>
            </li>
            <?php } ?>
          <li><a href="<?php echo home_url(); ?>/types/ekskursii-dlya-inostrantsev">Экскурсии для иностранцев</a></li>
        </ul>
      </div><!-- /.col-md-9 cat-exc-choos -->

      <h1 class="col-md-12 cat-title inner-title">Наши экскурсии</h1>
      <div class="row our-exc-container">
        <?php get_template_part('loop-excursion'); ?>
        <?php get_template_part('load-post'); ?>
      </div><!-- row our-exc-container -->



    </article>
  </div><!-- /.container -->

<?php get_footer(); ?>
