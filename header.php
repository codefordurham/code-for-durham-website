<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="header">
    <a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="Code for Durham logo"></a>
    <?php bloginfo('description'); ?>
    <div class="container">
      <nav class="main-navigation">
        <ul>
          <li <?php if (is_page('about')) echo 'class="current-menu-item"'?>>
            <a href="<?php echo site_url('/about'); ?>">About</a>
          </li>
          <li <?php if (is_page('contact')) echo 'class="current-menu-item"'?>>
            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
