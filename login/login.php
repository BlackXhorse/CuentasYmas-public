<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/inicio.css">
<header>
    <?php
if(isset($_GET['error'] )){;
   echo '<h1 class="error">No has confirmado tu correo o ingresate mal tus datos</h1>';
};
if(isset($_GET['registro'])){
    echo '<h1>Registrado con exito solo falta que verifiques tu correo y luego inicia sesion</h1>';
}
?>
<style>
    .error{
        text-align:center;
        border: 2px solid red;
    }
</style>
</header>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <form class="col-3" method="POST" action="php/login.php">
                <a class="title"><h1>Iniciar sesion</h1></a>
                <div class="mb-3">
                     <!--<label for="exampleInputEmail1" class="form-label">Email address</label> -->
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Nombre de usuario">
                    
                </div>
                <br>
                <div class="mb-3">
                   <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Contraseña">
                </div>
                <br>
                <p></p>
                <p><a class="register" href="register.php"><h3>Crear una cuenta</h3></a></p>
                <a class="olvide" href="restablecerphp"><h3>Olvidé mi contraseña</h3></a> <br>
                <br>
                <button type="submit" class="btn-primary">Iniciar sesion</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
