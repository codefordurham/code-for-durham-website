<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:300,400,500,700" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <a href="<?php echo site_url(); ?>">
      <img class="logo" src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="Code for Durham logo">
    </a>
    <nav class="navigation">
      <ul>
        <li><p class="slogan"><?php bloginfo('description'); ?></p></li>
        <li <?php if (is_page('about')) echo 'class="current-menu-item"'?>>
          <a href="<?php echo site_url('/about'); ?>">ABOUT</a>
        </li>
        <li <?php if (is_page('contact')) echo 'class="current-menu-item"'?>>
          <a href="<?php echo site_url('/contact'); ?>">CONTACT</a>
        </li>
      </ul>
    </nav>
  </header>
