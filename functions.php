<?php
    
  function add_files() {
    wp_enqueue_style('main_website_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'add_files');


  function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'theme_features');


  function post_types() {
    // Project Post Type
    register_post_type('project', array(
      'supports' => array( 'title', 'thumbnail'),
      'public' => true,
      'labels' => array( 
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project',
      ),
      'menu_icon' => 'dashicons-welcome-widgets-menus',
    ));
  }
  
  add_action('init', 'post_types');


  function menu_remove () { 
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('upload.php');
  }

  add_action('admin_menu', 'menu_remove');

?>