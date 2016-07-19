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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">

  <?php if ( is_front_page() || is_home() || is_page('24') ){ ?>
    <header role="banner" class="header-home">
  <?php } else {  ?>
    <header role="banner">
  <?php } ?>

    <div class="container">
      <div class="row">

        <div class="col-md-3 container-logo">
          <div class="logo">
            <?php if ( is_front_page() && is_home() ){ } else { ?>
              <a href="<?php echo home_url(); ?>">
                <?php  } ?>
                <h6 class="logo-title">Москва<span>гид для Вас</span></h6>
                <?php if ( is_front_page() && is_home() ){
                } else { ?>
              </a>
            <?php } ?>
          </div><!-- /logo -->
        </div><!-- /.col-md-2 -->

        <?php if ( is_front_page() || is_home() || is_page('24') ){ ?>
          <div class="col-md-2 col-md-offset-7 container-contacts">
        <?php } else {  ?>
          <nav class="col-md-7 container-headnav">
            <?php wpeHeadNav(); ?>
          </nav><!-- /.col-md-8 container-headnav -->

          <div class="col-md-2 container-contacts">
        <?php } ?>

          <a href="tel:+74955555555" class="phone">+7 (495) 555-55-55</a>
          <a href="#" class="btn btn-green btn-recall">Заказать звонок</a>
        </div><!-- /.col-md-2 col-md-offset-8 container-contacts -->

        <?php if ( is_front_page() || is_home() || is_page('24') ){ ?>
          <div class="col-md-12 container-title">
            <h2 class="header-title">Ночная Москва</h2>
            <h3 class="header-subtitle">18 и 25 июня (сб) в 20:00</h3>
            <a href="#" class="btn btn-green btn-titleorder">Записаться на экскурсию</a>
          </div><!-- /.col-md-12 container-title -->

          <div class="col-md-3 header-choose header-choose-calendar">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum expedita tempore minus tenetur fugit excepturi modi placeat in odit corrupti totam nemo dolore, quisquam voluptates quae perspiciatis, asperiores, nisi sed!
          </div><!-- /.col-md-3 header-choose header-choose-calendar -->

          <div class="col-md-6 header-choose header-choose-type">
            <h6 class="headline">Вид экскурсии</h6>
            <?php wpeSideNav(); ?>
          </div><!-- /.col-md-6 header-choose header-choose-type -->

          <div class="col-md-3 header-choose header-choose-foregin">
            <a href="" class="btn btn-transprent btn-foregin">Экскурсии для иностранцев</a>
          </div><!-- /.col-md-3 header-choose header-choose-foregin -->
        <?php } ?>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">

  <?php if ( is_front_page() || is_home() || is_page('24') ){ ?>
    <div class="container-mailsubscribe">
      <div class="container ">
        <div class="row">

          <div class="col-md-12">
            <h6>Получить расписание на электронную почту!</h6>
            <form action="">
              <input type="text" name="name" placeholder="Ваше имя...">
              <input type="text" name="email" placeholder="Ваш e-mail...">
              <button class="btn btn-green btn-subscribe">Подписаться</button>
            </form>
          </div><!-- /.col-md-12 -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.container-mailsubscribe -->
  <?php } ?>
