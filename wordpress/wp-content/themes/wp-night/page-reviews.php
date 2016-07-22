<?php /* Template Name: Reviews Page */ get_header(); ?>

   <div class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('article-post row'); ?>>

        <h1 class="col-md-12 page-title inner-title"><?php the_title(); ?></h1>
        <div class="col-md-6 contact-form clearfix">
          <ul class="contact-phones">
            <li><a href="tel:+74955555555">+7 (495) 555-55-55</a></li>
            <li><a href="tel:+74951234567">+7 (495) 123-45-67</a></li>
          </ul><!-- /.contact-phones -->
          <ul class="contact-mails">
            <li><a href="mailto:admin@tourist-msk.ru">admin@tourist-msk.ru</a></li>
          </ul><!-- /.contact-mails -->
          <form action="">
            <h6>Написать нам:</h6>
            <label for="name" class="form-half form-half-first">Ваше имя</label>
            <label for="email" class="form-half">Ваш e-mail:</label>
            <input type="text" name="name" id="name" class="form-half form-half-first">
            <input type="text" name="email" id="email" class="form-half">
            <label for="subject" class="label-full">Тема сообщения</label>
            <input type="text" name="subject" id="subject">
            <label for="content" class="label-full">Тема сообщения</label>
            <textarea name="content" id="content"></textarea>
            <input type="submit" class="btn btn-green form-half" value="Отправить">
          </form>
        </div><!-- /.col-md-6 contact-form-->
        <div class="col-md-6">
          <?php the_content(); ?>
          <?php edit_post_link(); ?>
        </div><!-- /.col-md-6 -->

      </article>
    <?php endwhile; else: // If 404 page error ?>
      <article class="row">
        <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
      </article>
    <?php endif; ?>
  </div><!-- /.container -->

<?php get_footer(); ?>
