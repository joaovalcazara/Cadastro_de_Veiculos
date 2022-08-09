<?php

require_once 'conexao.php';


include ('./controllers/validacaoController.php');

if (isset($_POST['bt_cadastrar'])) {

    $nomeCarro = $_POST['nomeCarro'];
    $marcaCarro =  $_POST['marcaCarro'];
    $valorCarro = $_POST['valorCarro'];
    $anoCarro  =  $_POST['anoCarro'];
    $descricaoCarro =  $_POST['descricaoCarro'];

    $query  = $pdo->prepare("INSERT INTO carros(nomeCarro, marcaCarro,valorCarro, anoCarro, descricaoCarro) VALUE (:nomeCarro, :marcaCarro, :valorCarro, :anoCarro, :descricaoCarro)");
    $query->bindParam(':nomeCarro', $_POST['nomeCarro']);
    $query->bindParam(':marcaCarro', $_POST['marcaCarro']);
    $query->bindParam(':valorCarro', $_POST['valorCarro']);
    $query->bindParam(':anoCarro', $_POST['anoCarro']);
    $query->bindParam(':descricaoCarro', $_POST['descricaoCarro']);

    require validaBanco($query);

 
}
