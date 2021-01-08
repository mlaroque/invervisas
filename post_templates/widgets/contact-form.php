<?php 

    global $post, $descarga_id, $info_post_title, $min; 

    if(!$info_post_title){
      $info_post_title = $post->post_title;
    }

    //wp_register_script('g-recaptcha', 'https://www.google.com/recaptcha/api.js', '', false, true );
    //wp_enqueue_script('g-recaptcha');

    wp_register_script('contact-form', get_template_directory_uri() .  '/js/contact-form.js', '', false, true );
    wp_enqueue_script('contact-form');
    

?>
 
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Solicita más información</h2>
      </div>
    </div>

    <form id="contact-form">
      <?php if($min !== "y"):?>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for="">¿Qué país te interesa?</label>
            <select class="form-control" id="pais_interes" name="pais_interes" required>
              <option value="">---Selecciona un país---</option>
              <option value="Anguila">Anguila</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option value="Canadá">Canadá</option>
              <option value="Chipre">Chipre</option>
              <option value="España">España</option>
              <option value="Estados Unidos">Estados Unidos</option>
              <option value="Grecia">Grecia</option>
              <option value="Granada">Granada</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Irlanda">Irlanda</option>
              <option value="Islas Caimán">Islas Caimán</option>
              <option value="Italia">Italia</option>
              <option value="Jersey">Jersey</option>
              <option value="Letonia">Letonia</option>
              <option value="Malasia">Malasia</option>
              <option value="Malta">Malta</option>
              <option value="Moldavia">Moldavia</option>
              <option value="Mónaco">Mónaco</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Nueva Zelanda">Nueva Zelanda</option>
              <option value="Portugal">Portugal</option>
              <option value="Reino Unido">Reino Unido</option>
              <option value="Dominica">Dominica</option>
              <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
              <option value="Santa Lucía">Santa Lucía</option>
              <option value="Singapur">Singapur</option>
              <option value="Suiza">Suiza</option>
              <option value="Tailandia">Tailandia</option>
              <option value="Turquía">Turquía</option>
              <option value="Vanuatu">Vanuatu</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label><b>¿Qué deseas?</b></label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Más información sobre los programas de inversión" name="quedeseas[]">
            <label class="form-check-label" for="">Más información sobre los programas de inversión</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Ser contactado por un asesor" name="quedeseas[]">
            <label class="form-check-label" for="">Ser contactado por un asesor</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Describe aquí..." name="quedeseas[]">
            <label class="form-check-label" for="">Otro asunto</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label>Si quieres agregar más detalles sobre lo que necesitas puedes escribirlo a continuación.</label>
            <input type="text" class="form-control" id="otro_asunto" name="otro_asunto" placeholder="Otro asunto">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h3>Perfil del solicitante</h3>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <div class="form-group">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Méxicana" required>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <div class="form-group">
            <label>País de residencia</label>
            <input type="text" class="form-control" id="pais_residencia" name="pais_residencia" placeholder="México" required>
          </div>
        </div>
      </div>
      <?php endif;?>
      <div class="row">
        <div class="col-12">
          <h3>Datos de contacto</h3>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ej. Eduardo García Ruíz" required>
          </div>
        </div>
        <?php if($min !== "y"):?>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <label>Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="ej. 6221234567" required>       
          </div>
        </div>
        <?php endif;?>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="eduardo@email.com" required>
          </div>
        </div>
      </div> 

      <?php if($min !== "y"):?>
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label><b>Vía de contacto preferida</b></label>
          </div>
        
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Teléfono" name="contacto_preferido[]">
            <label class="form-check-label" for="">Teléfono</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Whatsapp" name="contacto_preferido[]">
            <label class="form-check-label" for="">Whatsapp</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Email" name="contacto_preferido[]">
            <label class="form-check-label" for="">Email</label>
          </div>
        </div>
      </div>
      <?php endif;?>
      <div class="row">
        <div class="col-12">
          <div class="form-check">        
            <input class="form-check-input" type="checkbox" id="" value="">
            <label class="form-check-label" for="">He leído y acepto los <a href="https://invervisas.com/terminos-y-condiciones/" target="_blank">Términos y Condiciones</a> y el <a href="https://invervisas.com/aviso-de-privacidad/" target="_blank">Aviso de Privacidad</a>.</label>
          </div>
        </div>
      </div>  
      <input type="hidden" name="descarga_id" value="<?php echo $descarga_id;?>">
      <input type="hidden" name="info_post_title" value="<?php echo $info_post_title;?>">

      <!-- <div class="row">
          <div class="col-12 col-sm-12">
            <div class="form-group cf_captcha text-center">
            <div class="g-recaptcha" data-sitekey="6LfSxc8ZAAAAAAeQsItf-9WVyPxhWfTx-sMZ8iZL"></div>
            </div>
          </div>
      </div> -->

      <div class="row">
        <div class="col-12">
          <div class="form-group text-center">
            <button type="submit" class="btn cf_btn">Enviar</button>
          </div>
        </div>
      </div>
  </form>

  </div>

</div>
