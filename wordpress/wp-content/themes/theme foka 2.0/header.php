<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>Hello, world!</title>
  </head>

  <body <?php body_class(); ?>>
    <!-- <a href="#">
      <img class="rrss" style="position: fixed; z-index: 100; margin-left:81%; margin-top: 78.5vh;" src="<?php bloginfo('template_url')?>assets/img/rrss/instagram-brands.svg" alt="">
    </a> -->
<!-- navbar -->
    <nav class="col-lg-12 navbar navbar-expand-lg navbar-light" style="margin-top:-46px;">
      <div class="container padre2">
        <a class="navbar-brand col-lg-3" href="<?php echo esc_url(home_url('/')); ?>">
          <img  class="img-fluid logo" 
                src="<?php bloginfo('template_url')?>/assets/img/partes/logo.png" alt="">
        </a>
        <h3 class="col-lg-6 titulo">focagrow <br> cultivo y parafernalia
        </h3>
        
        <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
          <span class="toggler-icon">
            <img src="<?php bloginfo('template_url')?>/assets/img/partes/boton.png" style="width: 50px;  " alt="toggle">
          </span>
        </button>
        <?php
          
            wp_nav_menu( array(
              'theme_location'    => 'menu-principal',
              'depth'             => 5,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'navbarSupportedContent',
              'menu_class'        => 'nav navbar-nav ml-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
      </div>
    </nav>
<!-- /navbar -->