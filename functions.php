<?php
    
  function add_files() {
    wp_enqueue_style('main_website_styles', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'add_files');


  function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('homepage-banner', 2000, 705, true);
    add_image_size('project-banner', 1280, 495, true);
    add_image_size('project-thumbnail', 400, 300, true);
    add_image_size('project-spotlight', 492, 277, true);
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

  function remove_content_editor () {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    $pagename = get_the_title($post_id);

    if($pagename == 'Home'){ 
      remove_post_type_support('page', 'editor');
    }
  }

  add_action('admin_init', 'remove_content_editor');

  function shorten_text($text, $length){
    if(strlen($text)<$length+10) return $text; //don't cut if too short

    $break_pos = strpos($text, ' ', $length); //find next space after desired length
    $visible = substr($text, 0, $break_pos);
    return balanceTags($visible) . '...';
  }

  function get_next_meetup () {
    $response = wp_remote_get( 'https://api.meetup.com/Triangle-Code-for-America/events' );

    if( is_wp_error( $response ) ) {
      return false;
    }

    $body = wp_remote_retrieve_body( $response );

    $data = json_decode( $body );
            
    if( !empty( $data ) ) {
      foreach ($data as &$meetup) {
        if (substr( $meetup->name, 0, 15 ) === 'Code for Durham') {
          return $meetup;
        }
      }
      return false;
    } else {
      return false;
    }
  }

  add_action('init', 'get_next_meetup');
?>