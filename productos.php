<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="static/css/productos.css">
    <link rel="stylesheet" href="static/css/loader.css">
    <?php include 'layouts/headers/productos.php' ?>
</head>

<body>
    <?php include 'layouts/loader.php'; ?>
    <div id="body">
        <div class="cuentas">
            <h1>
                Cuentas:
            </h1>
        </div>

        <div class="cuentanueva" id="cuentanueva">
            <a href="javascript:cuentanueva ()">
                <div>
                    <a href="javascript:cuentanueva ()"><img src="static/img/7JPSME4YFBAXBNC4D3GWKBZIC4.jpg"
                            height="250"></a>
                    <div class="top">
                        <h5>Disponibles</h5>
                    </div>
                    <div class="bottom" id="bottom">
                        <h4>Cuenta GTA V <p></p> Nueva</h4>
                    </div>

                    <div id="cuentanuevainfo" class="cuentanuevainfo">
                        <div class="windowtitle">
                            <h3>Cuenta nueva de GTA V</h3>
                        </div>
                        <div class="windowinfo">
                            <h4>Cuenta de epic games <p></p> sin cuenta de rockstar asociada totalmente nueva.</h4>
                        </div>
                        <a href="javascript:nuevainfocerrar ()">
                            <div class="windowclose">
                                <h4>Cerrar ventana</h4>
                            </div>
                        </a>
            </a>
        </div>
    </div>
    </div>
    <div class="cuentaschetadas" id="cuentaschetadas">
        <a href="javascript: chetada() ">
            <div>
                <img src="static/img/dolares_gta.jpg" height="240">
            </div>
            <div class="top"><h4>Disponibles</h4></div>
            <div class="bottomc" id="bottomc"><h4>Cuenta semi-chetada de GTA V</h4></div>        
        </a>
        <div class="chetadainfo" id="chetadainfo">
            <div class="windowctitle">
                <h3>Cuenta semi-chetada</h3>
            </div>
            <div class="windowinfo">

            </div>
            <div class="windowcclose">
            <a href="javascript: chetadacerrar()"><h4>cerrar ventana</h4></a>
            </div>
        </div>
        </a>

    </div>
    </div>
</body>
<script>

</script>
<footer>
    <?php include 'layouts/footer.php'; ?>
</footer>

</html>