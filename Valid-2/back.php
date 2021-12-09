<?php

session_start();

    $_SESSION['address'] = $_POST['address'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['number'] = $_POST['number'];

    header("Location: ..\Valid-3\index.php");

   