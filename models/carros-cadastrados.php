<?php
require_once "conexao.php";

global $pdo;

$sql = "SELECT * FROM carros";
$sql = $pdo->prepare($sql);
$sql->execute();

 while($dados = $sql->fetch()){

  
        $nomeCarro = $dados['nomeCarro'];
        $marcaCarro = $dados['marcaCarro'];
        $valorCarro = $dados['valorCarro'];
        $anoCarro  = $dados['anoCarro'];
        $idCarro  = $dados['idCarro'];

    
        require './views/carros-cadastrados.view.php';

    }
   

