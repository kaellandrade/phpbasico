<?php require_once "validador_acesso.php" ?>

<?php // Lendo os dados de arquivo.txt
  // chamados
  $chamados = Array();

  // abrir o arquivo.txt
  $arquivo = fopen("arquivo.txt", "r");
  while(!feof($arquivo)){ // testa pelo fim de um arquivo
    // linhas
    $registro = fgets($arquivo); // recupera o que está na linha
    $chamados[] = $registro;
  };
  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- FontAwesome  -->
    <script src="https://kit.fontawesome.com/d393abca71.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          
          <a class="nav-link" href="logoff.php">SAIR <i class="fas fa-sign-out-alt"></i></a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              <?php 
                foreach($chamados as $chamado){
                  $linha = explode('#', $chamado);
                  if(count($linha)<3){
                    continue;
                  };
              ?>
                    <div class="card mb-3 bg-light">
                      <div class="card-body">
                        <h5 class="card-title"> <?=$linha[0]?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"> <?=$linha[1]?> </h6>
                        <p class="card-text"> <?=$linha[2]?> </p>
                      </div>
                    </div>

              <?php    
                };
              ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>