<?php
// Varios destinatarios
$para  =$email . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Restablecer contraseña Cuentas Y Mas';
$codigo= rand(1000,9999);


// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer</title>
</head>
<body >
    <h1 style=" font-size:40px; ">Recuperar contraseña De Cuentas Y Mas/h1>
    <div style="text-align:center; ">
        <p style="background-color:red; font-size;35px; ">Restablecer contraseña</p>
        <h3 style="background-color:red; font-size:25px;" >'.$codigo.'</h3>
        <p> <a class="link"
            href="http://pagina/login/reset.php?email='.$email.'&token='.$token.'" style="background-color:red; font-size:25px; "> 
            para restablecer da click aqui </a> </p>
        <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
    </div>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
//$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= "From:  pagina <CuentasYMas@pag.com>\r\n"; 
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;
}

?>
<html>
<style>
body{ background-color: blue;  }
.link{ font-family: cursive;
    text-align: center;
 }
</style>
</html>