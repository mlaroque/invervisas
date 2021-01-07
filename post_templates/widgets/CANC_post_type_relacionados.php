<?php
global $post;

$args = array(
    'post_type' => $post->post_type,
    'posts_per_page' => 4,
    'orderby' => 'rand',
    'post_status' => 'publish',
    'post_parent' => 0,
    'post__not_in' => array($post->ID)
);

$listado_post = get_posts($args);

$posttype_obj = get_post_type_labels( get_post_type_object($post->post_type) );

?>

<div class="container-fluid BGrelacionados">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center azul">Conoce Otras <?php  echo $posttype_obj->name; ?></h2>
			</div>
		</div>

	    <div class="row">

	            <?php foreach($listado_post as $current_post): ?>
	        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
	            <div class="relacionados shadow rounded-lg border">
	                <?php if($listado_post):?><a class="tdn"
	                    href="<?php echo get_permalink($current_post->ID);?>"><?php endif;?>
	                    <div class="relacionados-logo">
	                        <img src="<?php echo get_the_post_thumbnail_url($current_post->ID, 'medium');?>">
	                    </div>


	                    <!--<div class="stars text-center">
						<p class="marPad0">Puntuación <b class="puntuacion amarillo">3.6</b>/5 - <a class="amarillo" href="#">Opinar</a></p>
					</div>-->
	                    <?php if($listado_post):?></a><?php endif;?>
	                <?php if($listado_post):?><a class="tdn"
	                    href="<?php echo get_permalink($current_post->ID);?>"><?php endif;?>
	                    <div class="row">
	                        <div class="col-12">
	                            <table class="w-100 text-left">
	                                <tbody>
	                                	<tr>
	                                		<td class="relacionadosName text-center" colspan="2">
	                                			<p><b><?php echo $current_post->post_title;?></b></p>
	                                		</td>
	                                	</tr>
	                                    <tr>
	                                        <td colspan="2" class="text-center BGazul blanco">
	                                            <b><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_pub_priv', true );	?>
	                                            </b>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td class="text-center td33 brdr brdb" valign="top">
	                                            <span class="relacionadosTit">Costo</span>
	                                            <br><b><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_costo', true );	?></b>
	                                        </td>
	                                        <td class="text-center td33 brdb" valign="top">
	                                            <span class="quickinfo1Tit">Becas/Ayudas</span>
	                                            <br>
	                                            <?php if(get_post_meta( $current_post->ID, 'escuela_ficha_becas', true ) === "Si"):?>
	                                            <img src="<?php bloginfo('template_url'); ?>/images/si.svg" class="yesNo" />
	                                            <?php else: ?>
	                                            <img src="<?php bloginfo('template_url'); ?>/images/no.svg" class="yesNo" />
	                                            <?php endif;?>
	                                        </td>
	                                        <!--<td class="text-center td33 brdr brdb" valign="top">
	                                            <span class="quickinfo1Tit">Bilingue</span>
	                                            <br>
	                                            <?php if(get_post_meta( $current_post->ID, 'escuela_ficha_bilingue', true ) === "Si"):?>
	                                            <img src="<?php bloginfo('template_url'); ?>/images/si.svg" class="yesNo" />
	                                            <?php else: ?>
	                                            <img src="<?php bloginfo('template_url'); ?>/images/no.svg" class="yesNo" />
	                                            <?php endif;?>
	                                        </td>-->
	                                    </tr>
	                                    <tr>
	                                        <td colspan="3" class="text-center td33" valign="top">
	                                            <b><span class="quickinfo1Tit">Idiomas:</span>
	                                                <?php echo str_replace(";",", ",get_post_meta( $current_post->ID, 'escuela_ficha_idiomas', true ));	?></b>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>

	                            <!--  <table class="w-100 text-left">
	                                <tbody>
	                                    <tr class="BGverde">
	                                        <td colspan="2" class="text-center" valign="middle">

	                                           <p class="lhn marPad0 blanco">Nombre 
	                                    <b class="xl35 blanco"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_puesto', true );	?></b>
	                                        <br/> Calificado por: <b><a class="blanco" href="<?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_enlace', true );	?>" target="_blank" rel="nofollow"><?php echo get_post_meta( $current_post->ID, 'escuela_ficha_ranking_nombre', true );	?></a></b>
	                                    </p>  
	                                        </td>
	                                    </tr>
	                                    <tr class="verdeC text-left <?php if($listado_post):?>ln90px<?php endif;?>">
	                                <td class="brdb td33" valign="top">
	                                    <b>Nivel Educativo:</b>
	                                </td>
	                                <td class="brdb" valign="top">
	                                    <?php echo str_replace(";",", ", get_post_meta( $current_post->ID, 'escuela_ficha_nivel', true ));	?>
	                                </td>
	                            </tr>
	                            <tr class="azul text-left <?php if($listado_post):?>lm60px<?php endif;?>">
	                                <td class="brdb td33" valign="top">
	                                    <b>Método:</b>
	                                </td>
	                                <td class="brdb" valign="top">
	                                    <?php echo get_post_meta( $current_post->ID, 'escuela_ficha_metodo', true );	?>
	                                </td>
	                            </tr>
	                            <tr class="rojo text-left">
	                                <td class="brdb td33" valign="top">
	                                    <b>Horarios:</b>
	                                </td>
	                                <td class="brdb" valign="top">
	                                    <?php echo str_replace(";",", ", get_post_meta( $current_post->ID, 'escuela_ficha_horarios', true ));	?>
	                                </td>
	                            </tr>
	                            <tr>
	                                <td class="amarilloC">
	                                    <b>Horario</b>
	                                </td>
	                                <td class="amarilloC">
	                                    <?php echo get_post_meta( $current_post->ID, 'escuela_ficha_horario', true );	?>
	                                </td>
	                            </tr> -->
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                    <?php if($listado_post):?></a><?php endif;?>
	            </div>
	        </div>

	            <?php endforeach; ?>

	    </div>
	</div>
</div>
