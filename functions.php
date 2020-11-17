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
        'supports' => array( 'title', 'editor', 'author', 'comments', 'thumbnail', 'excerpt', 'page-attributes')
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

?>