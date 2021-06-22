<?php

    include dirname(__DIR__) . "/functions/not_wp_functions.php";

    $email = $_POST['email'];
    $random_key = generate_random_key();

    try {
        $conn = getDBConn_out_WP();
        
        // $sql = "INSERT INTO `LCMN_MAS_INFO`(`PAIS_INTERES`, `QUE_DESEAS`, `OTRO_ASUNTO`, `NACIONALIDAD`, `PAIS_RESIDENCIA`, `NOMBRE`, `TELEFONO`, `EMAIL`, `CONTACTO_PREFERIDO`, `LANDING_PAGE`,`ID_BTN_DESCARGA`) VALUES ('".$pais_interes ."','".implode(",", $quedeseas)."','".$otro_asunto."','".$nacionalidad."','".$pais_residencia."','".$nombre."','".$telefono."','".$email."','".implode(",", $contacto_preferido)."','".$post_title."','".$id_boton."')";
        
        // $stmt = $conn->prepare($sql);
        // $stmt->execute();
    
    }catch (PDOException $e) {
        $data['error'] = 'ERROR: No se conecto a la base de datos..!';
    }

    $headers = "From: Contacto Invervisas<contacto@invervisas.com>\r\n";
    $headers .= "Reply-To: no-reply@invervisas.com\r\n";
    $headers .= "Return-Path: no-reply@invervisas.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $to = "erick@lacomuna.mx";
    $subject = "Nuevo Contacto";
    $message = "";
    
    ob_start();
?>
    <body>
        <h2><span style="font-family:helvetica;">Hola&nbsp;&nbsp; <?php echo $email; ?>:</span></h2>

        <p><span style="font-family:helvetica;">Estamos felices de darte la bienvenida al inicio del proceso para obtener tu visa o pasaporte por inversi&oacute;n. </span></p>

        <p><span style="font-family:helvetica;">Puedes descargar el documento con informaci&oacute;n que solicitaste haciendo clic en el siguiente bot&oacute;n:</span></p>

        <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" width="100%">
            <tbody class="mcnButtonBlockOuter">
                <tr>
                    <td align="center" class="mcnButtonBlockInner" style="padding-top: 0;padding-right: 18px;padding-bottom: 18px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-radius: 4px;background-color: #bfb46a;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                        <tbody>
                            <tr>
                                <td class="mcnButtonContent" style="font-family: Arial; font-size: 16px; padding: 18px; text-size-adjust: 100%; text-align: center;" valign="middle"><a class="mcnButton " href="https://drive.google.com/file/d/1KAHVhDQxw8Ll2VPQd3MbXmGfyypAg3fK/view?usp=sharing" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;display: block;" target="_blank" title="Cotizador de Tarjetas de Crédito">Descargar PDF</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <p style="text-align: center;">o tambi&eacute;n puedes descargarlo en este enlace:&nbsp;</p>

        <p style="text-align: center;"><a href="https://drive.google.com/file/d/1KAHVhDQxw8Ll2VPQd3MbXmGfyypAg3fK/view?usp=sharing" target="_blank">https://drive.google.com/file/d/1KAHVhDQxw8Ll2VPQd3MbXmGfyypAg3fK/view?usp=sharing</a></p>

        <h2 style="text-align: center;"><span style="font-family:helvetica;"><strong>Nuestros asesores expertos</strong></span></h2>

        <p style="text-align: center;"><span style="font-family:helvetica;"><strong>Percheron Advisory</strong> es nuestro socio y encargado de facilitar todos los aspectos legales del proceso de tu visa de inversionista. Uno de sus agentes se pondr&aacute; en contacto contigo para asesorarte en los siguientes pasos a seguir.</span></p>

        <h2 style="text-align: center;"><span style="font-family:helvetica;"><strong>&iquest;A&uacute;n tienes preguntas?</strong></span></h2>

        <p style="text-align: center;"><span style="font-family:helvetica;">Estamos listos para resolver todas tus dudas. Puedes escribir&nbsp;directamente a&nbsp;<a href="mailto:jose.saro@percheronadvisory.com" target="_blank">jose.saro@percheronadvisory.<wbr />com</a>&nbsp;o puedes responder a este mismo correo.</span></p>

        <p style="text-align: center;">&nbsp;</p>

        <p style="text-align: center;"><span style="font-family:helvetica;"><b><font color="#073763">ALICIA MU&Ntilde;OZ</font></b><br />
        <span style="color:#696969;">Senior Consultant<br />
        ______________________________<wbr />__________________________</span></span></p>

        <p style="text-align: center;">&nbsp;</p>

        <p style="text-align: center;"><span style="color:#696969;"><span style="font-family:helvetica;"><font size="3"><b>OFICINA UK &nbsp;</b>Suite 5 1 D&#39;Oyley Street, London, England, SW1X 9AQ</font></span></span></p>

        <p style="text-align: center;"><span style="color:#696969;"><span style="font-family:helvetica;"><b>OFICINA M&Eacute;XICO &nbsp;</b>Plaza Para&iacute;so, 10 Avenida Sur 10, Playacar, 77717 Playa del Carmen, Q.R., M&eacute;xico</span></span></p>
    </body>
<?php
    $message = ob_get_clean();

    $success = mail($to, $subject, $message, $headers);
    
    if($success){
        echo  "success";
    }else{
        echo "failed";
    }

    function generate_random_key($length = 32) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    return $randomString;
}
?>