<?php 
global $post; 
global $purified_content; 

 //Dichiarazione Loop Personalizzato
 $args = array(
    'post_type' => 'residencia-por-inv',
    'posts_per_page' => -1, 
    'orderby' => 'menu_order date',
    'order' => 'ASC'
);

$posts = get_posts($args);

?>

<style>
.HPparallax {
    background-size: cover !important;
    padding-top: 1em;
    padding-bottom: 1em;
    background-attachment: fixed !important;
    margin-bottom: 0;
    box-shadow: inset 0px 0 300px #000;
}

.HPparallax {
    /* dynamic img url */
    background: url(<?php echo get_the_post_thumbnail_url($articulo->ID, 'medium');
    ?>);


}



/* Medium devices (tablets, 768px and up) */
@media (min-width: 576px) {
    .HPparallax {
        background-size: cover !important;
        padding-top: 9em;
        padding-bottom: 9em;
        background-attachment: fixed !important;
        margin-bottom: 0;
        box-shadow: inset 0px 0 300px #000;
    }

    .HPparallax {
        /* dynamic img url */
        background: url(<?php echo get_the_post_thumbnail_url($articulo->ID, 'full');
        ?>);
    }
}
</style>


<!--
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );?>
<section id="HPparallax" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
    <div class="container-fluid HPparallax">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 HPparallax_mid text-center">
                    <h1><?php echo $post->post_title; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section id="HPparallax">
    <div class="container-fluid HPparallax">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 HPparallax_mid text-center">
                    <h1><?php echo $post->post_title; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!--BREADCRUMBS-->
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php get_template_part("post_templates/widgets/breadcrumbs"); ?>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <?php $fichas = array(array("temp","Visa de Inversión","oro"),array("perm","Residencia permanente","oro"),array("ciud","Ciudadania","Blu"));
                foreach($fichas as $ficha):?>
            <?php $GLOBALS["tipo_visa"] = $ficha[0]; $GLOBALS["titulo_ficha"] = $ficha[1]; $GLOBALS["color_ficha"] = $ficha[2];?>
            <?php get_template_part("post_templates/residencia-por-inv/ficha-resumen"); ?>
            <?php endforeach;?>

            <div class="col-12 col-sm-5 col-md-4 col-lg-4 float-left">
                <?php get_template_part("post_templates/widgets/indice"); ?>
            </div>

            <?php echo $purified_content;?>
        </div>
    </div>
</div>



<div class="container-fluid marPad0 contact_btm shadow">
    <?php echo get_template_part('post_templates/widgets/contact-form');?>
</div>



<section id="destinos">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center destinosTop">
                    <h2>Programas Visa de Inversión</h2>
                </div>
                <?php
                //Dichiarazione Loop Personalizzato
                $args = array(
                    'post_type' => 'residencia-por-inv',
                    'posts_per_page' => -1, 
                    'orderby' => 'menu_order date',
                    'order' => 'ASC'
                );

                $posts = get_posts($args);
                $count = 0;
                
                //Esecuzione Loop Personalizzato

                foreach($posts as $post_residencia):

                  $count = $count + 1;  
            ?>
                <div class="col-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="destinos">
                        <div class="destinos-img">
                            <div class="destinos-title">
                                <p><?php echo $post_residencia->post_title; ?></p>
                            </div>
                            <a href="<?php echo esc_url( get_permalink($post_residencia->ID)); ?>"
                                class="list-item-thumb"><img class="lazy-img"
                                    data-src="<?php echo get_the_post_thumbnail_url($post_residencia->ID, 'medium'); ?>" />
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                endforeach;
            ?>


            </div>
        </div>
    </div>
</section>
<?php 
            wp_register_script('residencia-por-inv', get_template_directory_uri() .'/js/residencia-por-inv.js', null, false, true);
            wp_enqueue_script('residencia-por-inv');
        ?>