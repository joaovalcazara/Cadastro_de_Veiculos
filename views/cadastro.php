<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Cadastro de carro</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


  <link rel="stylesheet" href="../css/tema-site.css" />
  <link rel="stylesheet" href="../css/cadastro.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>

  <!-- container fluido 100% -->
  <div class="container-fluid text-center" id="sobre">

    <div class="goback">
      <a href="/home">
        <span class="material-icons ">
          arrow_circle_left
        </span>
        <p>voltar</p>
      </a>
    </div>
    <main class="form-cadastro">
      <div>
        <?php include_once 'escreve-mensagem.php'; ?>
      </div>

      <br>
      <img class="navbar-brand" src="img/logo.png" width="50" height="50"></a>
      <form action="/cadastrar" method="POST" enctype="multipart/form-data" class="needs-validation container" novalidate>

        <div class="row g-12">

          <h3>Infome os dados</h3>

          <div class="col-sm-12">
            <label  class="cadlabel">Nome do carro</label>
            <input type="text" class="inputs" id="nomeCarro" name="nomeCarro" required>
            <div class="invalid-feedback">
              Digite o nome do carro
            </div>
          </div>

          <div class="col-sm-12">
            <label  class="cadlabel">Marca do carro</label>
            <input type="text" class="inputs" id="marcaCarro" name="marcaCarro" value="" required>
            <div class="invalid-feedback">
              Digite a marca do carro
            </div>
          </div>


          <div class="col-md-12">
            <label  class="cadlabel">Valor do carro</label>
            <input type="text" class="inputs" id="valorCarro" name="valorCarro" required>
            <div class="invalid-feedback">
              Informe o valor de venda do carro
            </div>
          </div>

          <div class="col-md-12">
            <label  class="cadlabel">Ano do carro</label>
            <input type="number" class="inputs" id="anoCarro" name="anoCarro" required>
            <div class="invalid-feedback">
              Informe o ano do carro
            </div>
          </div>

          <div class="col-md-12">
            <label  class="cadlabel">Descrição</label>
            <input type="text" class="inputs" id="descricaoCarro" name="descricaoCarro" required>
            <div class="invalid-feedback">
              Informe o valor de venda do carro
            </div>
          </div>





        </div>
        <br>
        <button class="bt_logar" type="submit" name="bt_cadastrar">
          Cadastrar
        </button>
        <br>
      </form>

    </main>
    <!-- bootstrap.js -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/form-validation.js"></script>
  </div>
</body>

</html>