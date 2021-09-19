<?php 
    include "./conexion.php";
    $email =$_POST['email'];
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];
    if($p1 == $p2){
        $p1=sha1($p1);
        $conexion->query("update usuarios set password='$p1' where email='$email' ")or die($conexion->error);
        echo "<h1>Se ha cambiado la contraseña correctamente</h1>";
        echo '<a href="http://pagina/login/login.php">Ya puedes iniciar sesion con tu nueva contraseña</a>';
        
    }else{
        echo "no coinciden las contraseñas";
    }
?>

<style>
    h1{
        text-align:center;
        font-family:cursive;
        font-size:30px;
    }
    a{
       position:relative;
       left:50%;
        font-family:cursive;
        font-size:30px; 
    }
    body{
        background-image:url("background");
        background-size:cover;
    }
</style>
<title>Cambiar contraseña</title>
