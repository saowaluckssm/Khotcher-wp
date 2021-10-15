<?php 

function load_scripts(){
  wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.0, true);
  wp_enqueue_style('template', get_template_directory_uri() . '/css-template/template.css', array(), "1.0", "all");
}

add_action('wp_enqueue_scripts', 'load_scripts');


// Main configuration funtion
function add_config(){
  // Registering menus
  register_nav_menus(
    array(
      "main_menu" => __("Main Menu", "khotcher"),
      "left_menu" => __("Left Menu", "khotcher"),
      "right_menu" => __("Right Menu", "khotcher"),
      "footer_menu" => __("Footer Menu", "khotcher")
    )
  );
 //  Custom header
  $args = array(
    "height" => 400,
    "width" => 1920
  );

  add_theme_support("custom-header", $args);
  add_theme_support("post-thumbnails");
  add_theme_support("custom-logo", array(
    "height" => 100,
    "width" => 100
  ));


  // $textdomain = "khotcher";
  // load_theme_textdomain( $textdomain, get_template_directory() . "/languages/" );

}
add_action('after_setup_theme', 'add_config', 0);


// Register widget
add_action( "widgets_init", "add_sidebars" );
function add_sidebars() {
  remove_theme_support( 'widgets-block-editor' );
  register_sidebar(
    array(
      "name" => 'Home page product 1',
      "id" => 'home-page-product-1',
      "desription" => 'Home page products area.',
      "before_widget" => '<div class="product-img">',
      "after_widget" => '</div>',
      "before_title" => '<h4 class="card-title">',
      "after_title" => '</h4>'
    )
  );
  register_sidebar(
    array(
      "name" => 'Home page product 2',
      "id" => 'home-page-product-2',
      "desription" => 'Home page products area.',
      "before_widget" => '<div class="product-img">',
      "after_widget" => '</div>',
      "before_title" => '<h4 class="card-title">',
      "after_title" => '</h4>'
    )
  );
  register_sidebar(
    array(
      "name" => 'About page vision img',
      "id" => 'about-page-vision-img',
      "desription" => 'About page vision',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
  register_sidebar(
    array(
      "name" => 'About page vision contents',
      "id" => 'about-page-vision-contents',
      "desription" => 'About page vision',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
  register_sidebar(
    array(
      "name" => 'About page mission img',
      "id" => 'about-page-mission-img',
      "desription" => 'About page mission',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
  register_sidebar(
    array(
      "name" => 'About page mission contents',
      "id" => 'about-page-mission-contents',
      "desription" => 'About page mission',
      "before_widget" => '<div class="widget-wrapper">',
      "after_widget" => '</div>',
      "before_title" => '<h2 class="widget-title">',
      "after_title" => '</h2>'
    )
  );
  register_sidebar(
    array(
      "name" => 'About page cafe img',
      "id" => 'about-page-cafe-img',
      "desription" => 'Second News Area.',
      "before_widget" => '<div class="img-container">',
      "after_widget" => '</div>',
      // "before_title" => '<h1 class="cafe-title">',
      // "after_title" => '</h1>'
      
    )
  );
  register_sidebar(
    array(
      "name" => 'About page cafe contents',
      "id" => 'about-page-cafe-contents',
      "desription" => 'Second News Area.',
      "before_widget" => '<div class="card content">',
      "after_widget" => '</div>',
      
      
    )
  );
 
}

// Excerpt Length
function set_excerpt_length() {
  return 30;
}
add_filter("excerpt_length", "set_excerpt_length");

// Changing excerpt more
// function new_excerpt_more($more) {
//   global $post;
//   return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
//   }
//   add_filter('excerpt_more', 'new_excerpt_more');



// Add class on header navbar 
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



function namespace_add_custom_types( $query ) {
  if( (is_category() || is_tag()) && $query->is_archive() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'products'
        ));
    }
}
add_action( 'pre_get_posts', 'namespace_add_custom_types' );

function add_font_style() {
  wp_enqueue_style('font-style', get_stylesheet_directory_uri() . '/Fonts/MyFontsWebfontsKit.css');
}

add_action( 'wp_enqueue_scripts', 'add_font_style' );