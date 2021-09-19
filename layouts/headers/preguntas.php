<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./static/css/header/main.css">
    <link rel="shortcut icon" href="">
</head>

<body>
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand">
                <h3 class="title">Cuentas Y Mas</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">
                        <h5>Inicio</h5>
                    </a>
                    <a href="productos.php" class="nav-item nav-link">
                        <h5>Productos</h5>
                    </a>
                     <a href="preguntas.php" class="nav-item nav-link  active">
                        <h5>Preguntas frecuentes</h5>
                    </a>
                    <a href="javascript:abrir () " class="nav-item nav-link">
                        <h5>Sobre nosotros</h5>
                    </a>
                    <div class="sobre" id="sobre">
                        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, commodi esse ullam quis
                            maiores vitae provident soluta, ut animi reiciendis nisi nam qui temporibus suscipit! Eius
                            molestiae modi quos laudantium!</h1>

                        <a href="javascript:cerrar () " style="text-align:center;">
                            <h1>Cerrar ventana</h1>
                        </a>
                    </div>
                   

                </div>
                <div class="navbar-nav ml-auto">
                    <?php if(!empty($_SESSION['user'])): ?>
                    <a class="nav-item" href="user/index.php"> <?= $_SESSION['user']; ?>
                    </a>
                    <a class="nav-item nav-link" href="logout.php">Cerrar sesion</a>
                    <?php else: ?>
                    <a href="javascript: login() " class="nav-item nav-link">
                        <h5>Inicia Sesion o crea una cuenta</h5>
                    </a>
                    <div class="login" id="login">
                        <a href="./login/login.php">
                            <h1 class="loginh1">Inicia sesion</h1>
                        </a>
                        <a href="./login/register.php">
                            <h2 class="loginh1">Crea una cuenta</h2>
                        </a>
                        <a href="javascript: loginot() ">
                            <h4>Cerrar ventana</h4>
                        </a>
                    </div>

                    <?php endif; ?>


                </div>
            </div>
        </nav>
    </div>
<script src="./static/js/header.js"></script>

</body>

</html>