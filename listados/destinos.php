<?php global $post; ?>

<div class="container">
  <div class="row">
 
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
                <div class="otrosP shadow">
                <a href="<?php echo esc_url( get_permalink($post_residencia->ID)); ?>">
                    <div class="otrosP-img">
                        <img src="<?php echo get_the_post_thumbnail_url($post_residencia->ID); ?>" alt="Toda la información sobre <?php echo $post_residencia->post_title; ?>" />
                    </div>
                    <div class="otrosP-body">
                        <div class="otrosP-title">
                            <h2><?php echo $post_residencia->post_title; ?></h2>
                        </div>
                        <!--<div class="otrosP-tipoVmin">
                            <p>Inversión mínima: <br><b>500,000 euros + Costes</b></p>
                        </div>
                        <div class="otrosP-tipoVdesc">
                            <p>Tipo de visado: <br><b>Inmobiliaria, Residencia, Zona Schengen</b></p>
                        </div>-->
                    </div>
                </a>
                </div>
            </div>

      <?php
        endforeach;
      ?>   


  </div>
</div>