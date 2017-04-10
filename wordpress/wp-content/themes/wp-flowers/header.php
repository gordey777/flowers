<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
  <section class="head">
    <div class="subsection">
      <nav>
        <?php wpeHeadNav(); ?>
      </nav>

      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_flowers_caffe.svg" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

      <div class="pictograms">
        <div class="phone_number"><a href="tel:+79259743402">+7 (495) 290 01 94</a></div>
        <form method="get" action="#/search">
          <input type="text" name="s" placeholder="Введите запрос" value="" class="input_search" id="input_search">
        </form>
        <a id="search_button" href="#/search"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/lens.svg"></a>
        <a href="#/cart"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/cart.svg">
          <span class="cart_counter hidden">0</span></a>
        <div class="contact_icons content">
          <a href="https://www.instagram.com/flowerscaffe/" target="_blank" alt="ig"><img class="hovered" src="<?php echo get_template_directory_uri(); ?>/img/inst.svg"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.svg"></a>
          <a href="whatsapp://send?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9 %D0%B4%D0%B5%D0%BD%D1%8C!..&amp;phone=+79259743402" alt="wu"><img class="hovered" src="<?php echo get_template_directory_uri(); ?>/img/whats.svg"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg"><span class="smallphone">+79259743402</span></a>
        </div>
      </div>
    </div>
    <div class="serv_menu content">
      <div class="submenu">
        <ul>
          <li>
            <a href="#/search/allproducts" class="active">Все товары</a>
            <span>|</span>
          </li>
          <li data-catid="169"><a href="#/catalog/vip">VIP</a>
          </li>
          <li data-catid="168"><a href="#/catalog/srednyaya-tsena">Средняя цена</a>
          </li>
          <li data-catid="170"><a href="#/catalog/nedorogie">Недорогие</a>
          </li>
          <li data-catid="157"><a href="#/catalog/tsvety-v-korobke">Цветы в коробке</a>
          </li>
          <li data-catid="151"><a href="#/catalog/flowers_in_cart">Цветы в корзине</a>
          </li>
          <li data-catid="174"><a href="#/catalog/svadebnye-bukety">Свадебные букеты</a>
          </li>
          <li data-catid="171"><a href="#/catalog/filtr-po-tipu-tsvetov">Фильтр по типу цветов</a>
            <ul class="inner">
              <li><a href="#/catalog/rozy">Розы</a>
              </li>
              <li><a href="#/catalog/tyulpany">Тюльпаны</a>
              </li>
              <li><a href="#/catalog/podsolnuhi">Подсолнухи</a>
              </li>
              <li><a href="#/catalog/piony">Пионы</a>
              </li>
              <li><a href="#/catalog/gvozdiki">Гвоздики</a>
              </li>
              <li><a href="#/catalog/kally">Каллы</a>
              </li>
              <li><a href="#/catalog/freziya">Фрезия</a>
              </li>
              <li><a href="#/catalog/siren">Сирень</a>
              </li>
              <li><a href="#/catalog/alstromerii">Альстромерии</a>
              </li>
              <li><a href="#/catalog/gortenzii">Гортензии</a>
              </li>
              <li><a href="#/catalog/hrizantemy">Хризантемы</a>
              </li>
              <li><a href="#/catalog/mimoza">Мимоза</a>
              </li>
              <li><a href="#/catalog/orhidei">Орхидеи</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>


