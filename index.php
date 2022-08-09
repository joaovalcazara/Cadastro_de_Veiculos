<?php
    require 'vendor/autoload.php';
    
    use Pecee\SimpleRouter\SimpleRouter as Router;

    Router::get('/home', 'CasosController@index');
    Router::get('/cadastrar', 'CasosController@cadastro');
    Router::post('/cadastrar', 'CasosController@cadastrar');
    Router::get('/carro/{id}', 'CasosController@carro_individual');

 
    
 
    
    Router::start();

 
  
?>
