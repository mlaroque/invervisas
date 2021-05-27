<?php /* Template Name: Portada */ ?>

<?php get_header(); ?>
 
<section id="HPparallax">
	<div class="container-fluid HPparallax shadow">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-2 col-md-3 col-lg-3">
				</div>	
				<div class="col-12 col-sm-8 col-md-6 col-lg-6 HPparallax_mid text-center">
					<h1>inver<span class="oro">VISAS</span></h1>
					<p>Conoce los mejores programas de residencia y ciudadanía por inversión del mundo. Recibe asesoría a través de nuestros expertos de manera directa, rápida y confidencial.</p>
					<!--<a class="btn btn-HPparallax" href="#">¡Empieza ahora!</a>-->
				</div>
				<div class="col-12 col-sm-2 col-md-3 col-lg-3">
				</div>			
			</div>
		</div>
	</div>
</section>

<section id="hpbuscador">
	<div class="container-fluid shadow lc_cta-destinos">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BUSCADOR
<section id="hpbuscador">
	<div class="container-fluid shadow lc_cta-destinos">
		<div class="container">
			<form>
				<div class="row">
					<div class="col-12 col-sm-4 col-md-3 col-lg-3">
					</div>
					<div class="col-12 col-sm-5 col-md-4 col-lg-4">
						<div class="form-group">
						    <select class="form-control form-control-lg" id="">
						      <option>Selecciona País de Destino</option>
						      <option>México</option>
						      <option>Cuba</option>
						    </select>
					 	</div>
					</div>
					<div class="col-12 col-sm-3 col-md-2 col-lg-2">
						<div class="form-group">
							<a href="#" class="btn btn-block btn-cta-destinos">Buscar</a>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-3 col-lg-3">
					</div>
				</div>
			</form>
		</div>
	</div>	
</section>
-->

<section id="HPcatBox">
    <div class="container">
        <div class="row">
        	<div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card-content shadow">
                    <div class="card-img">
						<img class="lazy-img" data-src="<?php echo get_template_directory_uri() . '/images/residencia.svg'; ?>" />  
                    </div>
                    <div class="card-desc">
                        <h2>Residencia <br/>por Inversión</h2>
                        <p>Segunda residencia para viajar y vivir en donde quieres</p>
                    </div>
                   <div class="card-btn">
                    	<a href="https://invervisas.com/visa-de-inversionista/" class="btn-card">Saber Más</a> 
                    </div>
                </div>
            </div>
          <!--  <div class="col-md-4">
                <div class="card-content shadow">
                    <div class="card-img">
						<img class="lazy-img" data-src="<?php echo get_template_directory_uri() . '/images/ciudadania.svg'; ?>" />  
                    </div>
                    <div class="card-desc">
                        <h2>Residencia Permanente <br/>por Inversión</h2>
                        <p>Inicia una nueva vida con tu familia en el país de tu elección</p>
                    </div>
                <div class="card-btn">
                    	<a href="#" class="btn-card">Saber Más</a> 
                    </div> 
                </div>
            </div>-->
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card-content shadow">
                    <div class="card-img">
						<img class="lazy-img" data-src="<?php echo get_template_directory_uri() . '/images/nacionalidad.svg'; ?>" />  
                    </div>
                    <div class="card-desc">
                        <h2>Ciudadanía <br/>por Inversión</h2>
                        <p>Obtén la ciudadanía y un segundo pasaporte</p>
                    </div>
                    <div class="card-btn">
                    	<a href="https://invervisas.com/ciudadania-por-inversion/" class="btn-card">Saber Más</a> 
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2"></div>
        </div>
    </div>
</section>



<div class="clearfix"></div>

<div class="container HPtextWP">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>



<section id="destinos">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center destinosTop">
					<h2>Programas de Visa de Inversión</h2>
					<p>Descubre los mejores programas de Visa Dorada y ciudadanía por inversión.</p>
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
							<a href="<?php echo esc_url( get_permalink($post_residencia->ID)); ?>" class="list-item-thumb"><img  class="lazy-img" data-src="<?php echo get_the_post_thumbnail_url($post_residencia->ID, 'medium'); ?>" />  </a>
						</div>
					</div>
				</div>

			<?php
				endforeach;
			?>   
			
				<div class="col-12 text-center">
					<a href="https://invervisas.com/paises/" class="btn btn-masdestinos">Ver Todos</a>
				</div>
			
			</div>
		</div>
	</div>
</section>




<?php get_footer(); ?>