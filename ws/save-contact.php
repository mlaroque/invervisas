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

    	$headers = "From: Contacto Invervisas<contacto@invervisas.com>\r\n";
    	$headers .= "Reply-To: no-reply@invervisas.com\r\n";
    	$headers .= "Return-Path: no-reply@invervisas.com\r\n";
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

		
		if($success){
			echo  "success";
		}else{
			echo "failed";
		}


?>