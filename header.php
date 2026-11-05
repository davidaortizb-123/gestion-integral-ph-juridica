<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="wrap header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Gestión Integral PH y Jurídica, inicio">
      <?php if (has_custom_logo()) { echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', false, array('class'=>'custom-logo', 'alt'=>get_bloginfo('name'))); } else { ?><img src="<?php echo esc_url(get_template_directory_uri().'/assets/logo.svg'); ?>" alt=""><span class="brand-text"><strong>GESTIÓN INTEGRAL</strong><strong>PH Y JURÍDICA</strong><span>S.A.S.</span></span><?php } ?>
    </a>
    <button class="menu-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="primary-menu"><svg width="27" height="27" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
    <nav class="main-nav" id="primary-menu" aria-label="Navegación principal">
      <?php if (has_nav_menu('primary')) { wp_nav_menu(array('theme_location'=>'primary','container'=>false,'items_wrap'=>'%3$s')); } else { ?>
        <a href="<?php echo esc_url(home_url('/#nosotros')); ?>">Nosotros</a><a href="<?php echo esc_url(home_url('/#servicios')); ?>">Servicios</a><a href="<?php echo esc_url(home_url('/#metodologia')); ?>">Metodología</a><a href="<?php echo esc_url(home_url('/#preguntas')); ?>">Preguntas frecuentes</a><a href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a>
      <?php } ?>
    </nav>
    <a class="button button-dark header-cta" href="<?php echo esc_url(home_url('/#contacto')); ?>">Solicitar asesoría <span aria-hidden="true">↗</span></a>
  </div>
</header>
