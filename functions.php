<?php
$content_width = 790;
add_theme_support( 'automatic-feed-links' );
if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
  'name'=>'sidebar',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
  ));
  // register_sidebar(array(
  // 'name'=>'col1',
  // 'before_widget' => '<ul id="%1$s" class="widget col1 collums %2$s">',
  // 'after_widget' => '</ul>',
  // 'before_title' => '<h2 class="widgettitle">',
  // 'after_title' => '</h2>',
  // ));
  // register_sidebar(array(
  // 'name'=>'col2',
  // 'before_widget' => '<ul id="%1$s" class="widget col2 collums %2$s">',
  // 'after_widget' => '</ul>',
  // 'before_title' => '<h2 class="widgettitle">',
  // 'after_title' => '</h2>',
  // ));
  // register_sidebar(array(
  // 'name'=>'col3',
  // 'before_widget' => '<ul id="%1$s" class="widget col3 collums %2$s">',
  // 'after_widget' => '</ul>',
  // 'before_title' => '<h2 class="widgettitle">',
  // 'after_title' => '</h2>',
  // ));
  register_sidebar(array(
  'name'=>'The_Core',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'LLM',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'LLI',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'email',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'extra1',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="main widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'extra2',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="main widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'extra3',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="main widgettitle">',
  'after_title' => '</h2>',
  ));
  register_sidebar(array(
  'name'=>'extra4',
  'before_widget' => '<ul id="%1$s" class="widget cf %2$s">',
  'after_widget' => '</ul>',
  'before_title' => '<h2 class="main widgettitle">',
  'after_title' => '</h2>',
  ));
  
}
function TC_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'TC_page_menu_args' );
register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'ThinkingChristian' ),
    'generalNav' => __( 'General Nav', 'ThinkingChristian' ),
    'HomePage' => __( 'Home Page', 'ThinkingChristian' ),
  ) );
  
//kill default gallery styles
//add_filter( 'use_default_gallery_style', '__return_false' ); 

// STYLES ENQUED HERE!
function my_scripts_method() {
  $my_theme = wp_get_theme();
  wp_enqueue_script(
    'modernizr',
    get_template_directory_uri() . '/js/modernizr.min.js');
    wp_enqueue_script(
      'nofout',
      get_template_directory_uri() . '/js/foutbegone.min.js');
    wp_enqueue_script('jquery');//call jquery
    wp_enqueue_script('comment-reply');
    wp_enqueue_style('main', get_template_directory_uri().'/minified.php',array('fonts'), filemtime(get_stylesheet_directory() . '/style.css'),  'all');
    wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic','', '',  'all');
}

add_action('wp_enqueue_scripts', 'my_scripts_method');
add_theme_support( 'post-thumbnails' );
    
//define('HEADER_TEXTCOLOR', 'fff');
//define('HEADER_IMAGE', '%s/images/sky.jpg'); // %s is the template dir uri
//define('HEADER_IMAGE_WIDTH', 1000); // use width and height appropriate for your theme
//define('HEADER_IMAGE_HEIGHT', 225);
// gets included in the admin header
//add_theme_support( 'custom-header' );
//add_custom_background();
//add_action('admin_menu', array('jgOptions', 'add'));
?>
<?php  
function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
  $text = get_the_content('');
  $text = strip_shortcodes ( $text );
  
  $text = apply_filters('the_content', $text);
  $text = str_replace(']]>', ']]&gt;', $text);
  
  $allowed_tags = '<p>, <blockquote>, <a>, <h2>, <br /> ';
//  $allowed_tags .= '<p>';
  $text = strip_tags( $text, $allowed_tags );
  
  $excerpt_word_count = 85;
  $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count);
  
  $excerpt_end = '...';
  $excerpt_more = apply_filters( 'excerpt_more',' ' . $excerpt_end);
  
  $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
  if (count($words) > $excerpt_length ) {
    array_pop($words);
    $text = implode(' ', $words);
    $text = $text . $excerpt_more;
  } else {
    $text = implode(' ', $words);
  }
return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');
?>
