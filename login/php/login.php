<?php
    include "conexion.php";
    session_start();
    $email =$_POST['email'];
    $_SESSION['user'] =$_POST['email'];
    $password = sha1($_POST['pass']);
    $res = $conexion->query("select * from usuarios 
        where nombre='$email' 
        and password='$password'  and 
        confirmado = 'si'
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        
        header('Location: ../../');
        
    }else{
        $error = 'error';
        header('location: ../login.php?error='.$error.'');
    }
?>
<style>
a{
    font-family: cursive;
     font-weight: 900;
      font-size: 30px;
       color: red;
    
}
body{
    background-image: url("background");
    background-size: cover;
    text-align: center;
}
</style>