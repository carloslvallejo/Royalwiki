<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Royal Wiki</title>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <!--------------------------------- HEADER NAVBAR MENUS DE NAVEGACION ------------------------------>
  <header>
    <nav class="navbar menu navbar-dark">
      <a href="#" class="navbar-brand">ROYALWIKI</a>
      <div class="d-flex justify-content-center justify-content-md-end">
        <a href="#" class="nav-item nav-link" ><i class="fas fa-user"></i> INICIAR SESIÓN</a>
        <a href="#" class="nav-item nav-link" ><i class="fas fa-plus"></i> CREA TU CUENTA GRATIS</a>
      </div>
    </nav>

    <div class="jumbotron mt-2 font-weight-bold">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a href="#"><img src="<?php bloginfo('template_url');?>/img/logo.jpg" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      <!-- <div class="collapse navbar-collapse justify-content-end" id="menu">
            <div class="navbar-nav text-dark">
              <a href="#" class="nav-item nav-link">INICIO</a>
              <a href="#" class="nav-item nav-link">BLOG</a>
              <a href="#" class="nav-item nav-link">QUEST</a>
            </div>
          </div> -->
          <?php 
            wp_nav_menu( array(
              'theme_location' => 'menu-principal',
              'depth' => 2,
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse justify-content-end',
              'container_id' => 'menu',
              'menu_class' => 'navbar-nav text-dark',
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker()
            ));
          ?>
        </nav>
      </div>
    </div>
  </header>