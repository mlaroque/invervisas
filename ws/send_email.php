<?php

    include dirname(__DIR__) . "/functions/not_wp_functions.php";

    $email = $_POST['email'];
    $post_id = $_POST['post_id'];
    $pais = $_POST['pais'];

    try {
        $conn = getDBConn_out_WP();
        
        $sql = "INSERT INTO `LCMN_DESCARGAS`(`POST_ID`, `PAIS`, `EMAIL`) VALUES (\"$post_id\", \"$pais\", \"$email\")";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
    }catch (PDOException $e) {
        $data['error'] = 'ERROR: No se conecto a la base de datos..!';
    }

    if($pais == 'portugal'){
        $url_descarga = 'https://drive.google.com/file/d/1V-d87z6784rH57-u5sSEn_ZnT55eQtSe/view?usp=sharing';
    }elseif($pais == 'singapur'){
        $url_descarga = 'https://drive.google.com/file/d/1JPJFeHbAadcASg05wBm-hnPLvvpEvRA1/view?usp=sharing';
    }elseif($pais == 'grecia'){
        $url_descarga = 'https://drive.google.com/file/d/16R1-CCS6ztDZbavivS085pwYg4nnQjOR/view?usp=sharing';
    }elseif($pais == 'espana'){
        $url_descarga = 'https://drive.google.com/file/d/10xgGoDu4g74ryLVSNf3NkhBFKqn8PB_i/view?usp=sharing';
    }elseif($pais == 'dominica'){
        $url_descarga = 'https://drive.google.com/file/d/1RuaU9axp2aR98IQg1exKQsNQlOC2ObDA/view?usp=sharing';
    }elseif($pais == 'chipre'){
        $url_descarga = 'https://drive.google.com/file/d/1aanCxQ_uF_Ub26EkiNAlpP5zjebY6Wy-/view?usp=sharing';
    }elseif($pais == 'australia'){
        $url_descarga = 'https://drive.google.com/file/d/1CXJY5bIwisbyqln6uyRZAGelnYuqpgwV/view?usp=sharing';
    }elseif($pais == ' antigua-y-barbuda'){
        $url_descarga = 'https://drive.google.com/file/d/1qfgk7ZuCjzrPfkoW_sLtxEN7aDVqQJdA/view?usp=sharing';
    }elseif($pais == 'italia'){
        $url_descarga = 'https://drive.google.com/file/d/1ScHTtF0yahNler6eQZ1RVcodFpKu-iCP/view?usp=sharing';
    }elseif($pais == 'reino-unido'){
        $url_descarga = 'https://drive.google.com/file/d/1ZDmGSngt0XZj0wSFKh_mAXmiEuAUANtk/view?usp=sharing';
    }elseif($pais == 'st-kitts-y-nevis'){
        $url_descarga = 'https://drive.google.com/file/d/1YXZ5AEyu-NlgTu0cEfdTi6CS114jzk7m/view?usp=sharing';
    }elseif($pais == 'santa-lucia'){
        $url_descarga = 'https://drive.google.com/file/d/1tQIznRefKaVVHTOVJcfqRZZG5LylF-Wv/view?usp=sharing';
    }elseif($pais == 'irlanda'){
        $url_descarga = 'https://drive.google.com/file/d/1G0PJBthMfbDE0H2ZnZw8UXD3R9UhR-Ou/view?usp=sharing';
    }elseif($pais == 'granada'){
        $url_descarga = 'https://drive.google.com/file/d/1ZvA4lZ37aiWjg2IeT9XC16P0NV1rPHiu/view?usp=sharing';
    }

    $headers = "From: Contacto Invervisas<info@invervisas.com>\r\n";
    $headers .= "Reply-To: info@invervisas.com\r\n";
    $headers .= "Return-Path: info@invervisas.com\r\n";
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
                                <td class="mcnButtonContent" style="font-family: Arial; font-size: 16px; padding: 18px; text-size-adjust: 100%; text-align: center;" valign="middle"><a class="mcnButton " href="<?php echo $url_descarga; ?>" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;display: block;" target="_blank" title="Descargar PDF">Descargar PDF</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <p style="text-align: center;">o tambi&eacute;n puedes descargarlo en este enlace:&nbsp;</p>

        <p style="text-align: center;"><a href="<?php echo $url_descarga; ?>" target="_blank"><?php echo $url_descarga; ?></a></p>

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

?>