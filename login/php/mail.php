<?php

// Varios destinatarios
$para  = $email . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Gracias por registrarte';

//aleatoria
$codigo = rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF8" />
  <title style="text-align:center; font-size:35px;" >Bienvenido a Cuentas y mas!, Por favor verifica tu cuenta</title>
</head>
<body>
  <p style"text-align:center; font-size:30px; ">tu codigo de verificacion es :</p>
  <p> <a 
     href="http://cuentasgta.epizy.com/login/confirm.php?email='.$email.'" style="text-align:center; font-size:25px;" >
    Verificar cuenta </a> 
    </p>
 <h2 style="text-align:center; font-size:30px;" >'.$codigo.'</h2>
</body>

</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= "From: Cuentas y mas<CuentasYMas@pag.com>\r\n"; 
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

// Enviarlo
$enviado=false;
if(mail($para, $título, $mensaje, $cabeceras)){
   $enviado=true;
}




?>
<title>
    Correo de confirmacion
</title>