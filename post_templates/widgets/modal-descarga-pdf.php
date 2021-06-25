<?php
  global $post;
  global $modal_id; // viene del page de listado asilos

  if($modal_id){
      $div_id = 'lc_modal_'.$modal_id;

  }else{
      $div_id = "lc_modal";
  }

?>
<style type="text/css"> 
.overlay { visibility: hidden; position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; min-height: 100vh; z-index: 1000; position: fixed; top: 0; left: 0; z-index: 1040; width: 100vw; height: 100vh; background-color: rgb(0, 0, 0, 0.5); }
 .modal { width: 90%; margin: 30px auto; overflow: scroll; max-height: 80vh; background-color: #fff; border-radius: 0.3rem; }
 .modal-content { position: relative; display: -ms-flexbox; display: flex; -ms-flex-direction: column; flex-direction: column; width: 100%; margin: 0 auto; pointer-events: auto; background-clip: padding-box; height: 100%; overflow: scroll; }
 .modal-contentIn { width: 90%; margin: 0 auto; }
.overlay h3 { margin-top: 0; }
.btn-close, .btn-close:visited { background: transparent; color: #ed6a4b; font-weight: bold; line-height: normal; border: none; font-size: 1.6em; cursor: pointer; right: 15px; top: 3px; padding: 0; margin: 0; }
 .btn-close:hover, .btn-close:focus { color: #dd5a3b; }
 .terminos { font-size: 16px; }
 .btn-enviar, .btn-enviar:visited { background: #F5D10D; border: none; font-size: 18px; text-transform: uppercase; font-weight: bold; letter-spacing: 1px; padding: 8px 15px; color: #fff; }
 .btn-enviar:hover, .btn-enviar:focus { background: #ffba00; color: #fff; }
 .modal-content label { font-size: 16px; }
 @media (min-width: 576px) { .modal { width: 450px; margin: 60px auto; } 
}
 .modalTit { line-height: normal; text-align: center; color: #009fe3; text-transform: uppercase; margin: 20px auto 15px auto; }
.overlay label { color: #5d5b6d;  font-size: 1.2em; font-weight: 300; text-align: left; margin: 10px auto 10px 0;   line-height: normal; }
.overlay { font-size: 1em;  width: 100%;  margin-top: 1rem; margin-bottom: 5rem; }
.overlay ::placeholder {  color: #424d6b;  opacity: 1;  font-weight: 300; }
.overlay input[type="email"] { font-family: 'Josefin Sans'; box-shadow: 0 0 0 transparent; border-radius: 4px; background-color: #e6e7f1; color: #32373c; width: 100%; margin-bottom: 2rem; font-weight: 300; font-size: 1.2rem; }
 .overlay input[type="email"]:focus {  font-family: 'Josefin Sans'; box-shadow: 0 0 11px rgba(33,33,33,.2);  color: #424d6b; background: #f3efdf; outline: none; border:none; } 
.overlay .form-check { text-align: left; margin: 14px auto; font-size: 14px; }
.modalIn { width: 90%; margin: 10px auto; }
</style>

<div id="<?php echo $div_id;?>" class="overlay">
    <div class="modal" id="pideinfo" tabindex="-1" aria-labelledby="pideinfolabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modalIn">


                <div class="row">
                    <div class="col-12">

        <?php if($modal_id):?>
            <div class="bClose">
                <button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"
                    onclick='overlay("<?php echo $modal_id;?>")'><span
                    aria-hidden="true">&times;</span></button>
                </div>
        <?php else: ?>
            <div class="bClose">
                <button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"
                onclick='overlay()'><span aria-hidden="true">&times;</span></button>
            </div>
        <?php endif;?>
                    </div>
                </div>

            <form method="post" id="form_<?php echo $modal_id;?>">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <h3><b>Descarga Condiciones</b></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre"><b>Nombre</b></label>
                            <input type="text" name="nombre" class="form-control" id="nombre"
                            placeholder="ej: Carlos Díaz" required>
                        </div>
                    </div>
                </div>

                <br>
                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nombre"><b>Déjanos tu correo para recibir el enlace de descarga.</b></label>
                            <input type="text" name="email" class="form-control" id="email"
                            placeholder="ej: carlos.diaz@email.com" required="" data-error="Este campo es inválido">
                        </div>

                        <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>">
                        <input type="hidden" name="pais" value="<?php echo $post->post_name; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-check">
                            <input type="checkbox" id="" value="">
                            <label for="">He leído y acepto los <a href="https://invervisas.com/terminos-y-condiciones/" target="_blank">Términos y Condiciones</a> y el <a href="https://invervisas.com/aviso-de-privacidad/" target="_blank">Aviso de Privacidad</a>.</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group text-center">
                            <button type="submit" class="cf_btn">ENVIAR</button> 
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<?php

  wp_register_script('form-modal', get_template_directory_uri() .  '/js/form-modal.js', 'jquery', false, true );
  wp_enqueue_script('form-modal'); 

?>