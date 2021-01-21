<?php

session_start();

if(!isset($_SESSION['nome'])){
    header('Location: index.php');
    echo "<script>alert('Usuário e/ou senha inválido');</script>";
    exit;
}

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$idade = $_SESSION['idade'];
$contato = $_SESSION['contato'];
$endereco = $_SESSION['endereco'];
$materiais = $_SESSION['materiais'];


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <title>Olá   <?php echo $nome ?></title>
    <link rel="stylesheet" href="./assets/css/perfilUsuario.css">
</head>
<body>

  <header class="mb-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="./perfilUsuario.php"><img src="./assets/imagens/favelalogo.png" alt="Favela Invest"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item btn">
            <a class="nav-link" href="./index.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="mt-5 container-fluid">
    <div class="linha">
      <section class="section1 mb-5">
        <p class="display-4">Minha Conta (beneficiado)</p>
          <div class="painelPerfil bg-light" style="width: 18rem;">
          <img  src="./assets/imagens/1.jpeg" class="card-img-top rounded-circle imgPerfil" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Olá   <?php echo $nome ?></h5>
            <form action="./cadastro_contribuidores.php" class="painelForm form-inline">
              <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only"><?php echo $email; ?></label>
                <input type="text" readonly class="form-control-plaintext" id="" value="Idade: <?php echo $idade ?>">
                <input type="text" readonly class="form-control-plaintext" id="" value="Contato: <?php echo $contato ?>">
                <input type="text" readonly class="form-control-plaintext" id="" value="Endereço: <?php echo $endereco ?>">
                <a href="#" class="btn disabled btn-success btn-md active mr-1" role="button" aria-pressed="true">Atualizar Perfil</a>
                <a href="./apagar.php" class="btn btn-secondary btn-sm active" tabindex="-1" role="button" aria-disabled="true">Apagar Conta</a>
              </div>
              </form>
        
          </div>
          </div>
      </section>
        <div class="coluna ">
          <section class="section2">
          <div class="painelFaço ">
            <form action="./cadastro_contribuidores.php" method="POST" id="formFaco">
                <div class="form-group row">
                  <div class="col-sm-10">
                    <textarea name="material" class="msg" cols="35" rows="8">O que eu faço?</textarea>
                    <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off">
  Atualizar Materiais
</button>
                  
                    </div>
                  </div>        
              </form>
          </div>
          </section>
          <section class="section3 mb-5">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text bg-success rounded f" for="inputGroupSelect01">Materiais disponiveis:</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Escolha os materais que você quer doar</option>
                <option value="1"><?php echo $materiais; ?></option>
              </select>
            </div>

            <a href="./beneficiarios.php" type="button" class="btn btn-success btn-lg ">Contribuir</a>
            <p class="lead d-none">Mensagem Amigável</p>
          </section>
        </div>
    </div>

    <section class="trabalhos pt-5 px-5 mt-5">
      <button type="button" class="btn btn-success btn-lg btn-block">Veja Meus Trabalhos</button>
      <div class="fotos mt-5">
        <div><img class="w-100 h-100" src="./assets/imagens/perfil.jpeg" alt=""></div>
        <div> <img class="w-100 h-100" src="./assets/imagens/perfil2.jpeg" alt=""></div>
        <div> <img class="w-100 h-100" src="./assets/imagens/perfil3.jpeg" alt=""></div>
      </div>
    </section>
  </main>

</body>
</html>

