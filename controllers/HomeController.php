<?php

    class CasosController{

        public function cadastro(){
            return include './views/cadastro.php';
        }

        public function index(){
          
            return include './views/home.php';
        }
        public function cadastrar(){
          
            return include './models/cadastro-veiculo.php';
        }
        public function carro_individual($id){
            return include './views/carro-individual.php';
            

        }
        
    }
    