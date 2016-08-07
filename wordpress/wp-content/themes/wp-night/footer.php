  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="container">
    <div class="row">

      <div class="col-md-3 footer-title">
        <h6>Москва<span>гид для Вас</span></h6>
      </div><!-- /.col-md-3 -->

      <div class="col-md-6 footer-middle">

        <?php wpeFootNav(); ?>
        <ul class="footer-social">
          <li>Соц. сети:</li>
          <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-vk" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul><!-- /.footer-social -->

      </div><!-- /.col-md-6 -->

      <div class="col-md-3 footer-contact">
        <h6>Данные для связи</h6>
        <a href="tel:+79455555555" class="footer-phone">+7 945 555 55 55</a>
        <a href="mailto:moscow@mail.ru" class="footer-mail">moscow@mail.ru</a>
        <span class="create">Create: NextUp Studio</span>
      </div><!-- /.col-md-3 -->

    </div><!-- /.row -->
  </div><!-- /.container -->

  <div class="hidden-quered-calendar">
    <?php get_template_part('query-calendar'); ?>
  </div><!-- /.hidden-quered-calendar -->

  <div class="modal-bg modal-recall">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-8 modal-body">
          <?php echo do_shortcode('[contact-form-7 id="29" title="Call Me Baby"]'); ?>
          <span class="modal-close">x</span>
        </div><!-- modal-body -->
      </div>
    </div>
  </div><!-- modal-bg modal-recall -->

  <div class="modal-bg modal-titleorder">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 modal-body">
          <?php echo do_shortcode('[contact-form-7 id="287" title="OrderExcursion"]'); ?>
          <span class="modal-close">x</span>
        </div><!-- modal-body -->
      </div>
    </div>
  </div><!-- modal-bg modal-recall -->

  <div class="modal-bg modal-ourexccontainer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 modal-body">
          <?php echo do_shortcode('[contact-form-7 id="287" title="OrderExcursion"]'); ?>
          <span class="modal-close">x</span>
        </div><!-- modal-body -->
      </div>
    </div>
  </div><!-- modal-bg modal-ourexccontainer -->


</footer><!-- /footer -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDacqLU9_YxrrJP2PTOWLhqo4ti2tYqiR8"></script>
<?php wp_footer(); ?>

</body>
</html>
