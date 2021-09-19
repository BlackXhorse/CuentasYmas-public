<?php 
   include "./conexion.php";
   session_start();
   if( isset($_POST['nombre'] ) && isset($_POST['email']) && isset($_POST['pass'] ) 
    && isset($_POST['pass2'] )){

        if($_POST['pass'] == $_POST['pass2'] ){
            $name=$_POST['nombre'];
            $email=$_POST['email'];
            $pass=sha1($_POST['pass']);
            include "./mail.php";
            if($enviado){
                $conexion->query("insert into usuarios (nombre, email,password, confirmado ,codigo) 
                    values('$name','$email','$pass','no','$codigo')  ")or die($conexion->error);
                    
                    $registroe = "exitoso";
                    header("location: ../login.php?registro='.$registroe.");
            }else{
                $errorcoreo = 'error correo';
                header("location: ../register.php?errorcoreo='.$errorcoreo.' ");
            }
        }else{
            $error = 'error';
            header("location: ../register.php?error='.$error' ");
        }
    }

?>
<style>

body{
    background-image: url("background");
    background-size: cover;
}
a{
    text-align: left;
    font-family: cursive;
    font-size: 40px;
    color: blueviolet;
    position: relative;
    left: 20%;
    top: 250px;
    }
h1{   text-align: center;
    font-family: cursive;
    font-size: 40px;
    color: brown;
    position: relative;
    left: 0%;
    top: 300px;   }
</style>
<title>Registrado exitoso</title>