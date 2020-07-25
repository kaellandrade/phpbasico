<?php 
  require_once "validador_acesso.php";
  require_once "recupera_user_name.php";
?>

<?php // Lendo os dados de arquivo.txt
  // chamados
  $chamados = Array();

  // abrir o arquivo.txt
  $arquivo = fopen("../../../app_help_desk/arquivo.txt", "r");
  while(!feof($arquivo)){ // testa pelo fim de um arquivo
    // linhas
    $chamado_linha = fgets($arquivo); // recupera o que está na linha
    $registro = explode('#', $chamado_linha);
    if(count($registro) < 3){ // caso o registro esteja imcompleto
      continue;
    }

    if($_SESSION['perfil_id'] == 2){ // não é admim ?
      if($_SESSION['id'] != $registro[3]){ // o id do usuário atual é diferente do id cadastrado no registro ?
        continue;
      };
    };

    $chamados[] = $chamado_linha;
  };
  fclose($arquivo);
  // echo '<pre>';// ! apenas para debug
    // print_r($chamados);// ! apenas para debug
  // echo '</pre>';// ! apenas para debug

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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <button button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $user_name?> <i class="far fa-user"></i> <!--TODO: Fazer com o que usuário seja pegado dinamicamente-->
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
                <a class="dropdown-item" href="logoff.php">
                  SAIR
                </a>
              </div>
        
            
          </li>
        </ul>
      </div>      
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
                                    
              ?>
                    <div class="card mb-3 bg-light">
                      <div class="card-body">
                        <h5 class="card-title"> <?=$linha[0]?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted"> <?=$linha[1]?> </h6>
                        <p class="card-text"> <?=$linha[2]?> </p>
                        <pnclass = "card-text"> <small class="text-muted">Publicado em <?=$linha[4]?> </small> </p>
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

     <!-- Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>