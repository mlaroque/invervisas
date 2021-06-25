<?php

        include dirname(__DIR__) . "/functions/not_wp_functions.php";

		$pais_interes = $_POST['pais_interes'];
		$quedeseas = $_POST['quedeseas'];
		$otro_asunto = $_POST['otro_asunto'];
		$nacionalidad = $_POST['nacionalidad'];
		$pais_residencia = $_POST['pais_residencia'];
		$nombre = $_POST['nombre'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$contacto_preferido = $_POST['contacto_preferido'];
        $post_title = $_POST['info_post_title'];
        $id_boton = $_POST['descarga_id'];
        

        try {
            $conn = getDBConn_out_WP();
            
        	$sql .= "INSERT INTO `LCMN_MAS_INFO`(`PAIS_INTERES`, `QUE_DESEAS`, `OTRO_ASUNTO`, `NACIONALIDAD`, `PAIS_RESIDENCIA`, `NOMBRE`, `TELEFONO`, `EMAIL`, `CONTACTO_PREFERIDO`, `LANDING_PAGE`,`ID_BTN_DESCARGA`) VALUES ('".$pais_interes ."','".implode(",", $quedeseas)."','".$otro_asunto."','".$nacionalidad."','".$pais_residencia."','".$nombre."','".$telefono."','".$email."','".implode(",", $contacto_preferido)."','".$post_title."','".$id_boton."')";
            
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        
        }catch (PDOException $e) {
            $data['error'] = 'ERROR: No se conecto a la base de datos..!';
        }

    	$headers = "From: Contacto Invervisas<info@invervisas.com>\r\n";
    	$headers .= "Reply-To: info@invervisas.com\r\n";
    	$headers .= "Return-Path: info@invervisas.com\r\n";
    	$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
    	$to = "info@invervisas.com";
    	$subject = "Nuevo Contacto";
    	$message = "";
    	    
    	$message .= 'Hola,<br><br>';
    	$message .= 'Has recibido un nuevo contacto, contáctalo a la brevedad:<br>';
    	$message .= '<ul>';
    	$message .= '<li><b>País de interes</b>: '.$pais_interes.'</li>';
    	$message .= '<li><b>Qué desea</b>: '.implode(",", $quedeseas).'</li>';
    	$message .= '<li><b>Otro asunto</b>: '.$otro_asunto.'</li>';
    	$message .= '<li><b>Nacionalidad</b>: '.$nacionalidad.'</li>';
    	$message .= '<li><b>País de residencia</b>: '.$pais_residencia.'</li>';
    	$message .= '<li><b>Nombre</b>: '.$nombre.'</li>';
    	$message .= '<li><b>Teléfono</b>: '.$telefono.'</li>';
    	$message .= '<li><b>Email</b>: '.$email.'</li>';
    	$message .= '<li><b>Contacto Preferido</b>: '.implode(",", $contacto_preferido).'</li>';
        $message .= '<li><b>Landing page</b>: '.$post_title.'</li>';
        $message .= '<li><b>Botón de descarga (ID)</b>(Opcional): '.$id_boton.'</li>';
    	$message .= '</ul>';
    	$message .= 'Saludos,<br>';
    	$message .= 'El equipo de Invervisas.com';
		
		$success = mail($to, $subject, $message, $headers); 

		ob_start();
	?>

			<body>
				<h2><span style="font-family:helvetica;">Hola&nbsp;&nbsp;<?php echo $nombre;?>:</span></h2>

				<p><span style="font-family:helvetica;">Estamos felices de darte la bienvenida al inicio del proceso para obtener tu
						visa o pasaporte por inversi&oacute;n. </span></p>

				<p><span style="font-family:helvetica;">Uno de nuestros asociados de <strong>Percheron Advisory</strong> se
						pondr&aacute; en contacto con usted pr&oacute;ximamente por v&iacute;a telef&oacute;nica.</span></p>

				<h2 style="text-align: center;"><span style="font-family:helvetica;"><strong>Nuestros asesores
							expertos</strong></span></h2>

				<p style="text-align: center;"><span style="font-family:helvetica;">Percheron Advisory es nuestro socio y encargado
						de facilitar todos los aspectos legales del proceso de tu visa de inversionista. Uno de sus agentes se
						pondr&aacute; en contacto contigo para asesorarte en los siguientes pasos a seguir.</span></p>

				<h2 style="text-align: center;"><span style="font-family:helvetica;"><strong>&iquest;A&uacute;n tienes
							preguntas?</strong></span></h2>

				<p style="text-align: center;"><span style="font-family:helvetica;">Estamos listos para resolver todas tus dudas.
						Puedes escribir&nbsp;directamente a&nbsp;<a href="mailto:jose.saro@percheronadvisory.com"
							target="_blank">jose.saro@percheronadvisory.<wbr />com</a>&nbsp;o puedes responder a este mismo
						correo.</span></p>

				<p style="text-align: center;">&nbsp;</p>

				<p style="text-align: center;"><span style="font-family:helvetica;"><b>
							<font color="#073763">ALICIA MU&Ntilde;OZ</font>
						</b><br />
						Senior Consultant<br />
						______________________________<wbr />__________________________</span></p>

				<p style="text-align: center;">&nbsp;</p>

				<p style="text-align: center;"><span style="font-family:helvetica;">
						<font size="3"><b>OFICINA UK &nbsp;</b>Suite 5 1 D&#39;Oyley Street, London, England, SW1X 9AQ</font>
					</span></p>

				<p style="text-align: center;"><span style="font-family:helvetica;"><b>OFICINA M&Eacute;XICO &nbsp;</b>Plaza
						Para&iacute;so, 10 Avenida Sur 10, Playacar, 77717 Playa del Carmen, Q.R., M&eacute;xico</span></p>
			</body>
<?php
		$msg_to_user = ob_get_clean();
		
		mail($email, 'Gracias por solicitar información', $msg_to_user, $headers); //email de gracias para el usuario

		if($success){
			echo  "success";
		}else{
			echo "failed";
		}


?>