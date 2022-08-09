<?php session_start(); ?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="joao">
    <title>Carros</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/textos-home.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tema-site.css" />


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark texto-destaque">
            <div class="container-fluid">
                <img class="navbar-brand" href="#" src="img/logo.png" width="200" height="150"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active texto-menu" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link texto-menu" href="/cadastrar">Cadastrar veiculo</a>
                        </li>

                    </ul>
                </div>
                          <img class="navbar-brand" href="#" src="img/logo.png" width="200" height="150"></a>
            </div>

         
        </nav>
    </header>

    <main>
        <div class="container marketing">
            <hr class="featurette-divider">
            <h1 class="texto-destaque" id="texto-destaque">Carros cadastrados
            </h1>  
            <div>
        <?php include_once 'escreve-mensagem.php'; ?>
      </div>


            <?php
            include 'models/carros-cadastrados.php';
            ?>




        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Voltar ao topo</a></p>
            <p>&copy; 2022 Cadastro de carros. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
        </footer>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>