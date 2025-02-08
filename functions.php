<?php
//include files for ACF blocks
require_once('lib/acf_blocks.php');//ACF Gutenberg Blocks
require_once('lib/theme-cpt.php');
function custom_theme_scripts() {

	//All the style files
	if (!is_admin()) {
		wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null, 'all');
		wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null, 'all');
		wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null, 'all');
		
	}
	wp_enqueue_style( 'style-main', get_template_directory_uri().'/assets/css/style.css' );
	wp_enqueue_style( 'style-respo', get_template_directory_uri().'/assets/css/responsive.css' );
	wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css', array(), null, 'all');

	//All the script file
	wp_enqueue_script('jquery');
	// wp_enqueue_script( 'script-matchheight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.js', array(), '7.3.1', true );
	wp_enqueue_script( 'script-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-customjs', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

function atg_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'max_mega_menu_1') {
	  $classes[] = 'nav-item';
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

  function menu_anchor_class( $atts, $item, $args ) {
	if($args->theme_location == 'max_mega_menu_1') {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
	}
}
  add_filter('nav_menu_link_attributes', 'menu_anchor_class', 1, 3);


//Add support for svg images
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function pindrop_cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'pindrop_cc_mime_types' );
  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

 //image sizes
 add_action( 'after_setup_theme', 'pd_image_resize' );
function pd_image_resize() {
	add_image_size( 'author-thumb', 200,200 );
}
function get_image_id($image_url) {
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}
