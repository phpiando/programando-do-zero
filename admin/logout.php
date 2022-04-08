<?php include_once './config/config.php';

unset($_SESSION['userLogged']);
unset($_SESSION['userId']);
unset($_SESSION['userName']);

header("Location: login.php");