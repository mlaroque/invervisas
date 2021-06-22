<?php
    global $tipo_visa, $titulo_ficha, $color_ficha;
    $ficha_si_no = get_post_meta( $post->ID, 'residencia_inv_'.$tipo_visa.'_visa', true );

    $mas_info_es = get_post_meta($post->ID, 'residencia_mas_info_espanol', true);
    $mas_info_en = get_post_meta($post->ID, 'residencia_mas_info_ingles', true);

    if($ficha_si_no === "Si"):
?>

        <div class="col-12 col-sm-4 col-md-4 col-lg-4 float-left ficha_box">
            <div class="ficha_<?php echo $tipo_visa;?> shadow text-center">
                <h2><?php echo $titulo_ficha;?></h2>
                <p>Inversión mínima</p>
                 <p class="text"><?php echo get_post_meta( $post->ID, 'residencia_inv_'.$tipo_visa.'_minima', true ); ?></p>
                <p>Validez</p>  
                 <p class="text"><?php echo get_post_meta( $post->ID, 'residencia_inv_'.$tipo_visa.'_duracion_visa', true ); ?></p> 
                
            
                <p>Duración del Trámite</p> 
                 <p class="text"><?php echo get_post_meta( $post->ID, 'residencia_inv_'.$tipo_visa.'_duracion_tramite', true ); ?></p>


                <?php if($mas_info_es):?>
                    <div class="subTop">
                        <p> <img class="lazy-img" data-src="<?php echo get_template_directory_uri(); ?>/images/tick-w.svg" width="15" />
                <?php echo $mas_info_es;?></p>
                    </div>
                <?php endif;?>
                
                <?php if($mas_info_en):?>
                    <div class="subTBtm">
                        <p> <img class="lazy-img" data-src="<?php echo get_template_directory_uri(); ?>/images/tick-w.svg" width="15" />
                <?php echo $mas_info_en;?></p>
                    </div>
                <?php endif;?> 

                <?php if(is_user_logged_in()): ?>
                    <button class="btn btn-ficha-<?php echo $tipo_visa;?>" onclick="overlay('descarga')">Descargar Condiciones <small>(PDF)</small> </button>
                    <?php
                        $GLOBALS['modal_id'] = 'descarga'; 
                        get_template_part('post_templates/widgets/pide-info'); 
                    ?>
                <?php else: ?>
                    <a target="_blank" class="btn btn-ficha-<?php echo $tipo_visa;?>" href="<?php echo get_post_meta( $post->ID, 'residencia_inv_'.$tipo_visa.'_boton_condiciones', true ). '&pi=' . $post->post_title  . '&min=y'; ?>">Descargar Condiciones <small>(PDF)</small></a>
                    <a class="btn btn-ficha-<?php echo $tipo_visa;?>" href="<?php echo get_post_meta( $post->ID, 'residencia_inv_'.$tipo_visa.'_boton_solicitar', true ). '?pi=' . $post->post_title; ?>">Solicitar más información</a>
                <?php endif; ?>
                
            </div>
        </div>
<?php endif;?>
