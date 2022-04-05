<?php include_once './config/config.php';

unset($_SESSION['userLogged']);

header("Location: login.php");