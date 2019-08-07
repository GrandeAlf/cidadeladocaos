<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>A Cidadela do Caos</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="../../js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">


   

</head>
<body onload="barra()">
  <div id="barra">
  
  </div>
  <div class="margem">
    <form class="form-signin" method="post" action="../controller/valida_cadastro_usuario.php">
      <h2>Cadastro de Usuário</h2>
      
        <label class="control-label col-md-4  requiredField">Nome de Usuário</label>
        <div class="controls col-md-8 ">
            <input type="text" class="form-control" maxlength="12" placeholder="Nome de Usuário" name="login">
            <small style="margin-bottom: 10px" class="form-text text-muted"></small>
        </div>

        <label class="control-label col-md-4  requiredField">E-mail</label>
        <div class="controls col-md-8 ">
            <input type="email" class="form-control" placeholder="E-mail" name="email">
            <small style="margin-bottom: 10px" class="form-text text-muted">Nós não mandamos Spam, fique tranquilo! :D</small>
        </div>
      
        <label class="control-label col-md-4  requiredField">Senha</label>
        <div class="controls col-md-8 ">
            <input type="password" class="form-control" placeholder="Senha" name="senha">
            <small style="margin-bottom: 10px" class="form-text text-muted"></small>
        </div>

        <label class="control-label col-md-4  requiredField">Confirme sua Senha</label>
        <div class="controls col-md-8 ">
            <input type="password" class="form-control" placeholder="Senha" name="conf_senha">
            <small style="margin-bottom: 10px" class="form-text text-muted"></small>
        </div>
        
        <div class="controls col-md-8 ">
          <input class="btn btn-warning" type="submit" name="cadastrar" value="Cadastrar"/><br>
        </div>
                        

    </form>
  </div>


  
  






  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>