<?php

    $localhost = "localhost";
    $user = "root";
    $passw = "";
    $banco = "cadastro_carros";

    global $pdo;

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Erro:".$e->getMessage();
        exit;
    }