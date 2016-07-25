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
          <form action="">
            <h6>Заказать звонок</h6>
            <label for="you-name">Как к вам обращаться:</label>
            <input type="text" name="you-name" id="you-name">
            <label for="you-phone">Ваш телефон:</label>
            <input type="text" name="you-phone" id="you-phone">
            <input type="submit" value="Отправить">
          </form>
          <span class="modal-close">x</span>
        </div><!-- modal-body -->
      </div>
    </div>
  </div><!-- modal-bg modal-recall -->

  <div class="modal-bg modal-titleorder">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 modal-body">
          <form action="">
            <h6>Записаться на экскурсию</h6>
            <label for="you-name" class="form-half form-half-first">Имя:</label>
            <label for="you-secondname" class="form-half">Фамилия:</label>
            <input type="text" name="you-name" id="you-name" class="form-half form-half-first">
            <input type="text" name="you-secondname" id="you-secondname" class="form-half">
            <label for="you-email" class="form-half form-half-first">E-mail:</label>
            <label for="you-phone" class="form-half">Телефон:</label>
            <input type="text" name="you-email" id="you-email" class="form-half form-half-first">
            <input type="text" name="you-phone" id="you-phone" class="form-half">
            <label for="you-date">Дата экскурсии:</label>
            <select name="you-date" id="you-date">
              <option value="1">1</option>
            </select>
            <label for="you-quantity">Кол-во человек:</label>
            <input type="text" name="you-quantity" id="you-quantity" class="form-half form-half-first" value="2">
            <label for="you-text">Комментарий:</label>
            <textarea name="you-text" id="you-text" cols="30" rows="10"></textarea>
            <input type="submit" value="Отправить">
          </form>
          <span class="modal-close">x</span>
        </div><!-- modal-body -->
      </div>
    </div>
  </div><!-- modal-bg modal-recall -->

  <div class="modal-bg modal-ourexccontainer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 modal-body">
          <form action="">
            <h6>Записаться на экскурсию</h6>
            <label for="you-name" class="form-half form-half-first">Имя:</label>
            <label for="you-secondname" class="form-half">Фамилия:</label>
            <input type="text" name="you-name" id="you-name" class="form-half form-half-first">
            <input type="text" name="you-secondname" id="you-secondname" class="form-half">
            <label for="you-email" class="form-half form-half-first">E-mail:</label>
            <label for="you-phone" class="form-half">Телефон:</label>
            <input type="text" name="you-email" id="you-email" class="form-half form-half-first">
            <input type="text" name="you-phone" id="you-phone" class="form-half">
            <label for="you-date">Дата экскурсии:</label>
            <select name="you-date" id="you-date">
              <option value="1">1</option>
            </select>
            <label for="you-quantity">Кол-во человек:</label>
            <input type="text" name="you-quantity" id="you-quantity" class="form-half form-half-first" value="2">
            <label for="you-text">Комментарий:</label>
            <textarea name="you-text" id="you-text" cols="30" rows="10"></textarea>
            <input type="submit" value="Отправить">
          </form>
          <span class="modal-close">x</span>
        </div><!-- modal-body -->
      </div>
    </div>
  </div><!-- modal-bg modal-ourexccontainer -->


</footer><!-- /footer -->

<?php wp_footer(); ?>

</body>
</html>
