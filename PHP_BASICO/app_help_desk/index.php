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
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form class="form-horizontal" action="valida_login.php" method="post">
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input id="email" name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input id="senha" name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>                  
                  <div class="text-center alert alert-danger" role="alert">
                    Usuário ou senha Inválido(s)
                  </div>
                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>                  
                <div class="text-center alert alert-warning" role="alert">
                  Faça login primeiro!
                </div>
                <? } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>