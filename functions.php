<?php
/**
 * LaComuna Theme 2.0 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage LaComuna Theme
 * @since 1.0.0
 */

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'header' => esc_html__( 'Header', 'lacomuna-theme' ),
        'footer' => esc_html__( 'Footer', 'lacomuna-theme' ),
    ) );

add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
        wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/admin.css', false, '1.0.0' );
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lacomuna_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'lacomuna-theme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );  register_sidebar( array(
        'name'          => esc_html__( 'Footer-1', 'lacomuna-theme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => esc_html__( 'Footer-2', 'lacomuna-theme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
     register_sidebar( array(
        'name'          => esc_html__( 'Footer-3', 'lacomuna-theme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
 register_sidebar( array(
        'name'          => esc_html__( 'Footer-4', 'lacomuna-theme' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

 register_sidebar( array(
        'name'          => esc_html__( 'Footer-5', 'lacomuna-theme' ),
        'id'            => 'footer-5',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );


  register_sidebar( array(
        'name'          => esc_html__( 'Footer Horizontal Centered', 'lacomuna-theme' ),
        'id'            => 'footer-hori',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="footHori widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

  register_sidebar( array(
        'name'          => esc_html__( 'Footer Horizontal Left', 'lacomuna-theme' ),
        'id'            => 'footer-hsx',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="footHleft widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

  register_sidebar( array(
        'name'          => esc_html__( 'Footer Horizontal Right', 'lacomuna-theme' ),
        'id'            => 'footer-hdx',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="footHright widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );


  register_sidebar( array(
        'name'          => esc_html__( 'Copyright', 'lacomuna-theme' ),
        'id'            => 'copyright',
        'description'   => esc_html__( 'Add widgets here.', 'lacomuna-theme' ),
        'before_widget' => '<section id="%1$s" class="copyright widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
  
}
add_action( 'widgets_init', 'lacomuna_theme_widgets_init' );

/**************************************/
/***********POST TYPES*****************/
/**************************************/


add_action( 'init', 'create_post_type' );

function create_post_type() {  

    register_post_type( 'residencia-por-inv',  
        array(  
            'labels' => array(  
                'name' => __( 'Residencia por inversión' ),  
                'singular_name' => __( 'Residencia por inversión' )  
            ),  
        'public' => true,  
        'menu_position' => 4,  
        'hierarchical' => true,  
        'rewrite'     => array( 'slug' => 'residencia-por-inversion-en' ),
        'taxonomies' => array( 'category', 'post_tag' ),   
        'supports' => array( 'title', 'editor', 'author', 'comments', 'thumbnail', 'excerpt', 'page-attributes','revisions')
        )  
    ); 

}


/**************************************/
/***********META BOXES*****************/
/**************************************/ 

require_once ( get_template_directory() . '/functions/metas.php' );


/**************************************/
/***********END*****************/
/**************************************/ 

/**************************************/
/***********SHORTCODES*****************/
/**************************************/ 

/* Incluimos los shortcodes del antiguo canvas que nos hacen falta */
require_once ( get_template_directory() . '/functions/shortcodes.php' );


/**************************************/
/***********END*****************/
/**************************************/ 

/**************************************/
/***********FUNCIONES UTILES*****************/
/**************************************/ 

/* Incluimos los shortcodes del antiguo canvas que nos hacen falta */
require_once ( get_template_directory() . '/functions/utils.php' );


/**************************************/
/***********END*****************/
/**************************************/ 

/**************************************/
/***********END POST TYPES*****************/
/**************************************/

function lacomuna_scripts() {


}


add_action( 'wp_enqueue_scripts', 'lacomuna_scripts' );

/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }

return $urls;
}

// Disable embeds
function disable_embeds_code_init() {

 // Remove the REST API endpoint.
 remove_action( 'rest_api_init', 'wp_oembed_register_route' );

 // Turn off oEmbed auto discovery.
 add_filter( 'embed_oembed_discover', '__return_false' );

 // Don't filter oEmbed results.
 remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

 // Remove oEmbed discovery links.
 remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

 // Remove oEmbed-specific JavaScript from the front-end and back-end.
 remove_action( 'wp_head', 'wp_oembed_add_host_js' );
 add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );

 // Remove all embeds rewrite rules.
 add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

 // Remove filter of the oEmbed result before any HTTP requests are made.
 remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}

add_action( 'init', 'disable_embeds_code_init', 9999 );

function disable_embeds_tiny_mce_plugin($plugins) {
    return array_diff($plugins, array('wpembed'));
}

function disable_embeds_rewrites($rules) {
    foreach($rules as $rule => $rewrite) {
        if(false !== strpos($rewrite, 'embed=true')) {
            unset($rules[$rule]);
        }
    }
    return $rules;
}

?>