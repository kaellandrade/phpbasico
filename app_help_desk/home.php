<?php
  session_start();
  if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']){
    header('Location: index.php?login=erro2');

  }
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <img src="img/formulario_abrir_chamado.png" width="70" height="70">
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <img src="img/formulario_consultar_chamado.png" width="70" height="70">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>