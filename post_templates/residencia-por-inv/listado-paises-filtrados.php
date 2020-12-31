<?php
global $categoria;
global $post;
 //Dichiarazione Loop Personalizzato
 $args = array(
    'post_type' => 'residencia-por-inv',
    'posts_per_page' => 4, 
    'orderby' => 'menu_order date',
    'order' => 'ASC',
    'category_name' => $categoria,
    'post__not_in' => array($post->ID)
);

$posts = get_posts($args);


?>

<div class="container">
    <div class="row WotrosP">
        <!-- <div class="col-12">
                <h3 class="text-center">Otros países que ofrecen programas de Visa por inversión</h3>
                <p class="text-center">Algunos países que poseen programas similares a la <?php //echo $post->post_title;?> son</p>
            </div> -->

        <?php foreach($posts as $articulo): ?>
        <?php
                if($categoria == 'residencia-temporal-por-inversion'){
                    $inversion_min = get_post_meta($articulo->ID, 'residencia_inv_temp_minima', true);
                
                }else if($categoria == 'residencia-permanente-por-inversion'){
                    $inversion_min = get_post_meta($articulo->ID, 'residencia_inv_perm_minima', true);
                
                }else if($categoria == 'ciudadania-por-inversion'){
                    $inversion_min = get_post_meta($articulo->ID, 'residencia_inv_ciud_minima', true);
                }

                $tags = get_the_tags($articulo->ID);

                foreach($tags as $tag){
                    if(strpos($tag->slug, 'pais-') !== false){
                        $title = str_replace('pais-', '' , $tag->name);
                    }
                }
    
        ?>
        <div class="col-12 col-sm-4 col-md-3 col-lg-3">
            <div class="otrosP shadow">
                <a href="<?php echo get_permalink($articulo->ID);?>">
                    <div class="otrosP-img">
                        <img alt="<?php echo $articulo->post_title;?>"
                            src="<?php echo get_the_post_thumbnail_url($articulo->ID, 'medium');?>">
                    </div>
                    <div class="otrosP-body">
                        <div class="otrosP-title">
                            <h2><?php echo $title ;?></h2>
                        </div>
                        <div class="otrosP-tipoVmin">
                            <p>Inversión mínima: <br><b><?php echo $inversion_min;?></b></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>