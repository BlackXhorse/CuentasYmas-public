<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/loader.css">
    <link rel="shortcut icon" href="static/img/control.png">
</head>
<header>
    <?php include 'layouts/header.php' ?>
</header>


<body>
    <br>
    <!--loader-->
    <?php include 'layouts/loader.php'; ?>
    <!--loader-!-->
    <div id="body">

        <div class="gtavc" id="gtav">
            <a href="productos.php#cuentanueva">
            <img src="static/img/7JPSME4YFBAXBNC4D3GWKBZIC4.jpg" id="gtav" height="200" />
            <div class="texto-encima">
                <h4>Disponibles y nuevas</h4>
            </div>
            <div class="centrado">
                <h3>Cuentas GTA V</h3>
            </div>
            </a>
        </div>
        <div class="cheteo1c" id="cheteo1c">
            <img src="static/img/dolares2.jpg" id="gtav" height="200" />
            <div class="texto-encimac">
                <h4>Disponibles</h4>
            </div>
            <div class="centradoc">
                <h3>Cheteos de cuentas</h3>
            </div>
        </div>

        <div class="mods" id="mods">
            <img src="static/img/maxresdefault.jpg" id="gtav" height="200" />
            <div class="texto-encimam">
                <h4>Disponibles</h4>
            </div>
        </div>
</body>
<footer>
    <?php include 'layouts/footer.php';  ?>
</footer>
<script src="static/js/index.js">
</script>

</html>