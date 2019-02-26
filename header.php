<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gabardini Abogados</title>
  <meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<body <?php body_class(); ?>>

<?php if(is_front_page() ) : ?>
  <header class="bg-transparent">
<?php else : ?>
  <header class="bg-light">
<?php endif; ?>

    <div class="container">
      <div class="cd-main-header animate-search">
          <div class="cd-logo cd-logo-light"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/cd-logo-light.svg" alt="Logo"></a></div>
          <div class="cd-logo cd-logo-dark"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/cd-logo-dark.svg" alt="Logo"></a></div>
    
        <nav class="cd-main-nav-wrapper">
          <a href="#search" class="cd-search-trigger cd-text-replace">Buscar</a>
          
          <ul class="cd-main-nav">
            <li><a href="<?php echo home_url(); ?>/firma">La firma</a></li>
            <li><a href="<?php echo home_url(); ?>/firma#prof" class="to-scroll">Profesionales</a></li>
            <li><a href="<?php echo home_url(); ?>/publicaciones">Publicaciones</a></li>
            <li><a href="<?php echo home_url(); ?>/contacto">Contacto</a></li>
          </ul> <!-- .cd-main-nav -->
        </nav> <!-- .cd-main-nav-wrapper -->
    
        <a href="#0" class="cd-nav-trigger cd-text-replace">Menu<span></span></a>
      </div>
    </div>
  </header>