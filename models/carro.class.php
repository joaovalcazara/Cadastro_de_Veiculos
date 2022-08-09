<?php

    Class carro{
        public function consultaCarro($id){
            global $pdo;

            $sql = "SELECT * FROM carros WHERE idCarro = :idCarro";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("idCarro", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();
  
                $nomeCarro = $dado['nomeCarro'];
                $marcaCarro= $dado['marcaCarro'];
                $valorCarro = $dado['valorCarro'];
                $anoCarro = $dado['anoCarro'];
                $descricaoCarro = $dado['descricaoCarro'];
                
              require_once './views/carro.view.php';
                
            }else{
                
               require './views/notfound.view.php';
            }
        }


       
    }
    ?>