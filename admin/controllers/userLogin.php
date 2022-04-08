<?php 
include_once '../config/db.php';

$response = [];

try {    
    if(empty($_POST['email'])){
        throw new Exception("Informe o email");
    }

    if(empty($_POST['password'])){
        throw new Exception("Informe a senha");
    }

} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage(),
    ];
}

echo json_encode($response);