<?php
  global $post;
  global $modal_id; // viene del page de listado asilos

  if($modal_id){
      $div_id = 'lc_modal_'.$modal_id;

  }else{
      $div_id = "lc_modal";
  }
?>

<div id="<?php echo $div_id;?>" class="overlay">
    <div class="modal" id="pideinfo" tabindex="-1" aria-labelledby="pideinfolabel" aria-hidden="true">
        <div class="modal-content">

            <form method="post" id="form_<?php echo $id;?>">
                <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 options">

                        <h3 class="marPad0"><b class="azul upper">Información de Precios</b></h3>

                        <?php if($modal_id):?>
                        <p><button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"
                                onclick='overlay("<?php echo $modal_id;?>")'><span
                                    aria-hidden="true">&times;</span></button></p>
                        <?php else: ?>
                        <p><button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"
                                onclick='overlay()'><span aria-hidden="true">&times;</span></button></p>
                        <?php endif;?>

                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label for="nombre"><b>Nombre y Apellido:</b></label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="ej: Carlos Pérez"
                            required="" data-error="Este campo es inválido">
                    </div>
                    <!-- <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label for="nombre"><b>Ciudad:</b></label>
                        <input type="text" name="ciudad" class="form-control" id="ciudad"
                            placeholder="ej: Playa Del Carmen" required="" data-error="Este campo es inválido">
                    </div> -->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <center><button type="submit" class="btn btn-rojo">ENVIAR</button></center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

  wp_register_script('form-modal2', get_template_directory_uri() .  '/js/form-modal2.js', 'jquery', false, true );
  wp_enqueue_script('form-modal2'); 

?>