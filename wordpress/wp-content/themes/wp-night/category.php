<?php get_header(); ?>

  <div class="container">
    <article class="article-post row">

      <h1 class="col-md-12 cat-title inner-title"><?php the_category(', '); ?></h1>
      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

    </article>
  </div><!-- /.container -->

<?php get_footer(); ?>
