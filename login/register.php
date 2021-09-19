<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/registro.css">
</head>
<header>
    <?php
    if(isset($_GET['errorcoreo'] )){
        echo '<h1 class="error">No se ha podido enviar el correo de verificacion, verifica que los datos esten bien o intenta con un correo valido</h1>';
    }
    if(isset($_GET['error'] )){
        echo '<h1 class="error">Ocurrio un error al crear tu cuenta.</h1>';
    }

?>
</header>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:10%">
            <form class="col-3" method="POST" action="php/registrar.php">
                <a class="title"><h1>Registro</h1></a>
                <div class="mb-3">
                   <!-- <label for="Nombre" class="form-label">Nombre</label> -->
                    <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Nombre de usuario">
                    
                </div>
                <br>
                <div class="mb-3">
                   <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Correo">
                    
                </div>
                <br>
                <div class="mb-3">
                   <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Contraseña">
                </div>
                <br>
                <div class="mb-3">
                     <!--<label for="exampleInputPassword2" class="form-label">Confirmar Password</label> -->
                    <input type="password" class="form-control" id="exampleInputPassword2" name="pass2" placeholder="Confirmar Contraseña">
                    <a class="login" href="login.php"><h3>Inicia sesion</h3></a>
                </div>
               
                <button type="submit" class="btn-primary">Registrar</button>
               <!-- <button type="submit" class="btn btn-success">Login</button> -->
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>