<!--HEADER B -->
<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LCtheme2020
 */

 global $post;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/elements.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/widgets.css">
<?php if(is_front_page()):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/portada.css">
<?php elseif($post->post_type === "residencia-por-inv"):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/indice.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ficha_visado.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/comments.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-form.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/accordion.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destinosV2.css">

<?php elseif($post->ID === 66):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-form.css">
<?php elseif($post->ID === 75):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destinos.css">
<?php elseif($post->ID === 123):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ninja-form.css">
    
<?php elseif($post->ID === 341 || $post->ID === 333):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destinosV2.css">
<?php endif; ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N3GXQV9');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3GXQV9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
 
 <!--
 <div class="descarganosBox">
    <a class="btn btn-descarganos shadow" href="https://invervisas.com/contacto/">
        <table><tr><td><img src="<?php echo get_template_directory_uri() . '/images/download.svg'; ?>" alt="Descarga el PDF con toda la información" /></td>
            <td valign="middle">Descargar PDF</td></tr></table></a>
</div>
-->
 <div class="contactanosBox">
    <a class="btn btn-contactanos shadow" href="https://invervisas.com/contacto/">
         <img class="float-left" src="<?php echo get_template_directory_uri() . '/images/contact.svg'; ?>" alt="Contáctanos para más información" /> Contacto</a>
</div>


    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="logo lazy-img" data-src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" alt="<?php bloginfo( 'name' ); ?>" />
                </a>

                <div class="navbar-toggler hamburger_wrapper">
                    <div id="lc_hamburger" class="navbar-toggler" tabindex="1" role="button"
                        onclick="hamburger_toggle();">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="openLg" id="lc_nav-menu">
                    <?php wp_nav_menu(array(
	                       'theme_location' => 'header',
	                       'container' => false,
	                       'walker' => new LCMN_Walker(),
	                       'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto">%3$s</ul>') )?>
                </div>
            </div>
        </nav>
    </header>

    <script type="text/javascript">
    function hamburger_toggle() {
        var element = document.getElementById("lc_hamburger");
        element.classList.toggle("close");

        var element = document.getElementById("lc_nav-menu");
        element.classList.toggle("now-active");

    }
    </script>
 