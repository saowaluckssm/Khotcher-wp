<?php 

function load_scripts(){
  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), "1.0", "all");
}

add_action('wp_enqueue_scripts', 'load_scripts');


// Main configuration funtion
function add_config(){
  // Registering menus
  register_nav_menus(
    array(
      "main_menu" => "Main Menu",
      "left_menu" => "Left Menu",
      "right_menu" => "Right Menu",
      "footer_menu" => "Footer Menu"
    )
  );
 //  Custom header
  $args = array(
    "height" => 500,
    "width" => 1920
  );

  add_theme_support("custom-header", $args);
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo", array(
    "height" => 100,
    "width" => 200
  ));

}
add_action('after_setup_theme', 'add_config', 0);


// Register widget
add_action( "widgets_init", "add_sidebars" );
function add_sidebars() {
  remove_theme_support( 'widgets-block-editor' );
  register_sidebar(
    array(
      "name" => 'Home page news 1',
      "id" => 'services-1',
      "desription" => 'First News Area.',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
  register_sidebar(
    array(
      "name" => 'Home page news 2',
      "id" => 'services-2',
      "desription" => 'Second News Area.',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
  register_sidebar(
    array(
      "name" => 'Home page news 3',
      "id" => 'services-3',
      "desription" => 'Third News Area.',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
}

// Excerpt Length
function set_excerpt_length() {
  return 20;
}
add_filter("excerpt_length", "set_excerpt_length");



// Add class on header navbar 
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


