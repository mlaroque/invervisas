<?php
  global $post;
  global $modal_id; // viene del page de listado asilos

  if($modal_id){
      $div_id = 'lc_modal_'.$modal_id;

  }else{
      $div_id = "lc_modal";
  }

  if($post->post_name == 'portugal'){
    $url_pdf = 'https://drive.google.com/file/d/1V-d87z6784rH57-u5sSEn_ZnT55eQtSe/view?usp=sharing';
  }
?>
<style type="text/css">
    .overlay {
        visibility: hidden;
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        min-height: 100vh;
        z-index: 1000;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: rgb(0, 0, 0, 0.5);
    }

    .modal {
        width: 90%;
        margin: 30px auto;
        overflow: ;
        height: 80vh;
        background-color: #fff;
        border-radius: 0.3rem;
    }

    .modal-content {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        pointer-events: auto;
        background-clip: padding-box;
        height: 100%;
        overflow: scroll;
    }

    .modal-contentIn {
        width: 90%;
        margin: 0 auto;
    }

    }

    .modal-content h4 {
        font-size: 22px;
        color: #feca01;
    }

    .btn-close,
    .btn-close:visited {
        background: transparent;
        color: #ed6a4b;
        font-weight: bold;
        line-height: normal;
        border: none;
        font-size: 1.6em;
        cursor: pointer;
        position: absolute;
        right: 15px;
        top: 3px;
        padding: 0;
        margin: 0;
    }

    .btn-close:hover,
    .btn-close:focus {
        color: #dd5a3b;
    }

    .terminos {
        font-size: 16px;
    }

    .btn-enviar,
    .btn-enviar:visited {
        background: #F5D10D;
        border: none;
        font-size: 18px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 8px 15px;
        color: #fff;
    }

    .btn-enviar:hover,
    .btn-enviar:focus {
        background: #ffba00;
        color: #fff;
    }

    .modal-content label {
        font-size: 16px;
    }

    @media (min-width: 576px) {
        .modal {
            width: 450px;
            margin: 60px auto;
        }
    }

    .modalTit {
        line-height: normal;
        text-align: center;
        color: #009fe3;
        text-transform: uppercase;
        margin: 20px auto 15px auto;
    }
</style>

<div id="<?php echo $div_id;?>" class="overlay">
    <div class="modal" id="pideinfo" tabindex="-1" aria-labelledby="pideinfolabel" aria-hidden="true">
        <div class="modal-content">

            <form method="post" id="form_<?php echo $modal_id;?>">
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
                        <label for="nombre"><b>Déjanos tu email para que te enviemos el enlace de descarga.</b></label>
                        <input type="text" name="email" class="form-control" id="email"
                            placeholder="ej: carlos.diaz@email.com" required="" data-error="Este campo es inválido">
                    </div>

                    <input type="hidden" name="url_descarga" value="<?php echo $url_pdf; ?>">

                </div>

                <div class="row">
                    <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="" value="">
                            <label class="form-check-label" for="">He leído y acepto los <a
                                    href="https://invervisas.com/terminos-y-condiciones/"
                                    target="_blank">Términos y Condiciones</a> y el <a
                                    href="https://invervisas.com/aviso-de-privacidad/" target="_blank">Aviso de
                                    Privacidad</a>.</label>
                        </div>
                    </div>
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

  wp_register_script('form-modal', get_template_directory_uri() .  '/js/form-modal.js', 'jquery', false, true );
  wp_enqueue_script('form-modal'); 

?>