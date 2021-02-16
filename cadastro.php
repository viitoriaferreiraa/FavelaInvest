<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastre se</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/cadastro.css">
</head>

<body id="root" class="flex-column container d-flex">
    <main class=" painel-login d-flex flex-column m-auto justify-content-center w-50 h-25">
        <form class="p-5" action="./backend/cadastro_usuarios.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Digite sua senha">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Senha</label>
      <input type="password" name="conf_senha" class="form-control"  placeholder="Digite sua senha novamente">
    </div>
  <div class="form-group">
    <label for="inputAddress2">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputAddress2" placeholder="Digite seu nome">
  </div>

  <div>
  <label>Colaborador</labe> <input type="radio" name="tipo" aria-label="Checkbox for following text input" value="1">
  <label>Beneficiario</labe> <input type="radio" name="tipo" aria-label="Checkbox for following text input" value="2">
  </div>
  
  <button type="submit" class="btn btn-info">Cadastrar</button>
  <a href="./index.php" class="btn btn-info">Já possui cadastro? Clique aqui.</a>

</form>
   
    </main>

</body>


</html>
