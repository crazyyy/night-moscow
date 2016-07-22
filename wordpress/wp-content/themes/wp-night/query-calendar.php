<div class="query-calendar">
  <?php $args = array('post_type' => 'excursion','posts_per_page' => 100); query_posts($args); ?>
    <?php get_template_part('loop-excursion'); ?>
  <?php wp_reset_query(); ?>
</div><!-- /.query-calendar -->
