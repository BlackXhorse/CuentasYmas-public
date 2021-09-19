<?php 
if(isset($_GET['email'] )){
    $email = $_GET['email'] ;
   
}else{
    header('Location: ./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cuenta</title>
    <!-- CSS only -->
<link href="css/confirm.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" action="./php/verificar.php" method="POST">
                <a class="title">Verificar Cuenta</a>
                <div class="mb-3">
                   <!-- <label for="c" class="form-label">Código de Verificación</label> -->
                    <input type="number" class="form-control" id="c" name="codigo" placeholder="Codigo de verificacion">
                    <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                </div>
               
                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>