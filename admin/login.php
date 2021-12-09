<?php

session_start();

require("../config.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_encontrado = false;
    if($login == $_POST['pass']){
        $usuario_encontrado = true;
    } else {
        $usuario_encontrado = false;
    }

    if($usuario_encontrado){
        $_SESSION['logueado'] = true;
        $_SESSION['nombre'] = "SelsiusRC28";
        header('Location: index.php');
        exit;
    }else{
        $error_login = true;
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="login">
        <form action="login.php" method="POST"  >
            <img src="img/sayhitogabe.jpg" alt="as" class="logo" >
            <div class="contenedor">
                <label for="">By:</label>
                <div class="input-group mb-3">         
                    <span class="input-group-text" ><img src="img/logo.png" alt="" class="icon"></span>
                    <input type="text" class="form-control " placeholder="@SelsiusRC28" disabled>
                </div>  
                <label for="">Password:</label>
                <div>
                    <input type="password" placeholder="Your Password" class='form-control <?php
                       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if( $usuario_encontrado == false){
                          echo "border-danger ";
                        }
                      }
                    ?>' name="pass">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                      if( $usuario_encontrado == false){
                        echo "<p class='text-danger animate__animated animate__shakeX'>Password incorrecto</p>";
                      }
                    }
                    ?>
                </div>
                <div>
                    <input type="submit" value="ingresar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>