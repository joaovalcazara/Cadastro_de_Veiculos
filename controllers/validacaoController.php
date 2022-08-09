<?php
 session_start();

function validaBanco($query){

    if ($query->execute()) {
        if ($query->rowCount() > 0) {

            $_SESSION['msg'] = "Cadastro realizado com sucesso";
            $_SESSION['status']    = "success";
            
            header('Location: /home');
        } else {
            $_SESSION['msg'] = "Erro ao realizar o cadastro";
            $_SESSION['status']    = "danger";
           
            header('Location: /cadastro');
        }
    } else {
        $_SESSION['msg'] = "Erro ao realizar o cadastro";
        $_SESSION['status']    = "danger";
      
        header('Location: /cadastro');
    }

}
