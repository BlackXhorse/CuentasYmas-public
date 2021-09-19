<?php 
    include "./conexion.php";
    $email =$_POST['email'];
    $bytes = random_bytes(5);
    $token =bin2hex($bytes);

    include "mail_reset.php";
    if($enviado){
        $conexion->query(" insert into passwords(email, token, codigo) 
         values('$email','$token','$codigo') ") or die($conexion->error);
    }
?>
  <!DOCTYPE html>
   <html lang="en">
   <head>
   <style>
        body{ background-image: url("fondo");
            background-size: cover;
        }
    h1 { 
        font-family: cursive;
         font-size: 50px;
         font-weight: 900;
        text-align: center;
        color: #0080F9; }
  </style>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Correo enviado</title>
       <link rel="stylesheet" href="C:\xampp\htdocs\web oficial pruebas\login\css\correoe.css">
   </head>
   <body>
       <h1>Verifica tu correo para restablecer la contraseña</h1>
   </body>
   </html>