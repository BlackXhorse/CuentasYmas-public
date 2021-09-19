<?php 
    include "./conexion.php";
    $email =$_POST['email'];
    $token =$_POST['token'];
    $codigo =$_POST['codigo'];
    $res=$conexion->query("select * from passwords where 
        email='$email' and token='$token' and codigo='$codigo' ")or die($conexion->error);
    $correcto=true;
    if(mysqli_num_rows($res) > 0){
        $fila = mysqli_fetch_row($res);
        $fecha =$fila[4];
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
       /* if($minutos > 10 ){
            echo "token vencido";
        }else{
            echo "todo correcto";
        }*/
        $correcto=true;
    }else{
        $correcto=true;
    }
   
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar password </title>
    <!-- CSS only -->
<style>
    body{
        background-image:url("fondo");
        background-size:cover;
    }
    .form-control{
        text-align:center;
        
    }
    input[type="password"]{
     outline: none;
    display: block;
    height: 110%;
    border-radius: 5px;
    margin: 20px auto;
    font-family: cursive;
    font-size: large;
  }
    h2{
    font-family: cursive;
   font-size: 35px;
    font-weight: 900;
  position: relative;
  left: 39%;
}
 button[type= "submit"] {
    font-family: cursive;
     font-size: 28px;
      font-weight: 900;
    padding: 10px;
    color:white;
    background: rgba(31, 0, 0, 0);
    margin: 20px auto;
    margin-top: 0;
    border: 0;
    border-radius: 3px;
    cursor: pointer;
    position: relative;
     left: 45%;
     top: -10px;
  }
  button[type="submit"] {
    background-color: rgb(25, 0, 255);
  }
</style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <?php if($correcto){ ?>
                <form class="col-3" action="./cambiarpassword.php" method="POST">
                    <h2>Restablecer Password</h2>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="c" name="p1" placeholder="Contraseña nueva">
                    
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="c" name="p2" placeholder="Confirmar nueva contraseña">
                        <input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">

                    </div>
                
                    <button type="submit" class="btn btn-primary">Cambiar</button>
                </form>
            <?php }else{ ?>
                <div class="alert alert-danger" >Código incorrecto o vencido</div>
            <?php } ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>