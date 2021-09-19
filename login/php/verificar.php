<?php
    include "conexion.php";
    $email =$_POST['email'];
    $codigo =$_POST['codigo'];
    $res = $conexion->query("select * from usuarios 
        where email='$email' 
        and codigo='$codigo' 
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        echo "<a>Cuenta verificada y registrada correctamente!</a>";
        $conexion->query("update usuarios set confirmado = 'si' where email = '$email' ");
        echo ' <a>Ya puedes </a><a href="../login.php">iniciar sesion </a>';
    }else{
        echo "<a>Codigo incorrecto o vencido.</a>";
    }
?>
<style>
body{
    background-image:url("fondo");
    background-size: cover;
}
a{
    text-align: left;
    font-family: cursive;
     font-weight: 900;
      font-size: 30px;
    position: relative;
    left: 15%;
    top: 200px;

}

</style>