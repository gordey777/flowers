  <div class="bg"></div>
  <footer>
    <div class="main">
      <div class="content">
        <?php wpeFootNav() ?>

      </div>
    </div>
    <div class="info content">
      <div>
        <div class="title">Режим работы:</div>
        <div>Без выходных: с 10:00 до 22:00</div>
      </div>
      <div class="middle">

        <div class="logo"></div>

        <?php if( have_rows('socials', 53 ) ): ?>
          <div class="socials">
            <?php while ( have_rows('socials', 53 ) ) : the_row(); ?>
              <a class="soc-icons" href="<?php the_sub_field('link'); ?>">
                <i class="fa <?php the_sub_field('icon'); ?>"></i>
              </a>
            <?php  endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
      <div>
        <div class="phone">
          <?php if( have_rows('phone', 53 ) ): ?>
            <?php while ( have_rows('phone', 53 ) ) : the_row(); ?>
              <a href="tel:+<?php the_sub_field('phone_link'); ?>">
                <?php the_sub_field('phone_text'); ?>
              </a>
            <?php  endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="title">Контакты:</div>
        <div>info@flowers-cafe.ru</div>
        <div>Адрес: г. Москва,</div>
        <div>ул. Большая Академическая, д. 49, кор.1</div>
        <div>ул. Новокузнецкая, д. 44</div>
      </div>
    </div>
    <div class="©">
      <div class="content">&copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>.</div>
    </div>
  </footer>

  <div class="overlay"></div>

  <aside class="callback">
    <img class="close_button" src="<?php echo get_template_directory_uri(); ?>/img/close_button.svg" alt="X">
    <h3>Заказать обратный звонок</h3>
    <form method="post" action="#/sendmail.php" id="callback_form">
      <label>Как к вам обращаться?</label>
      <input type="text" name="username" value="" id="username" required="" placeholder="Евгений">
      <label>Контактный номер телефона</label>
      <input type="text" name="phone" value="" id="phone" placeholder="+7(926)598-19-11">
      <input type="hidden" name="code" value="58e79eafe533c">
      <div class="button_wrap">
        <input type="submit" class="button" value="Отправить">
      </div>
    </form>
  </aside>



    <?php wp_footer(); ?>


  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.elevatezoom.min.js" type="text/javascript"></script>
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/ctrlnavigate.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousellite.js"></script>
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script> -->
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.selectbox.js"></script> -->
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script> -->
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/customslider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/flowers.js"></script> -->
<!--   <script src="<?php echo get_template_directory_uri(); ?>/js/baloon.js" type="text/javascript"></script> -->

  <script>
  let_start = '58e79eafe533c';
  </script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.autocomplete-min.js"></script>

</body>
</html>
