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
    <link rel="stylesheet" href="./assets/css/perfilDoador.css">
</head>
<body>

  <header class="mb-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="./perfilDoador.php"><img src="./assets/imagens/favelalogo.png" alt="Favela Invest"></a>
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
        <p class="display-4">Minha Conta (doador)</p>
          <div class="painelPerfil bg-light" style="width: 18rem;">
          <img  src="./assets/imagens/1.jpeg" class="card-img-top rounded-circle imgPerfil" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Olá   <?php echo $nome ?></h5>
            <form class="painelForm form-inline w-50">
              <div class="form-group mb-2">
                <label for="staticEmail2" class="sr-only">Email</label>
                <input type="text" class="form-control-plaintext" id="" value="Idade: <?php echo $idade ?>">
                <input type="text"  class="form-control-plaintext" id="" value="Contato: "<?php echo $contato ?>>
                <input type="text"  class="form-control-plaintext mb-5" id="" value="Bairro: <?php echo $endereco ?>">
                <a href="#" class="btn disabled btn-success btn-md active mr-1" role="button" aria-pressed="true">Atualizar Perfil</a>
                <a href="./apagar.php" class="btn btn-secondary btn-sm active" tabindex="-1" role="button" aria-disabled="true">Apagar Conta</a>
              </div>
              </form>
        
          </div>
          </div>
      </section>
        <div class="coluna ">
          <section class="section2 d-none">
          <div class="painelFaço ">
            <form id="formFaco">
                <div class="form-group row">
                  <div class="col-sm-10">
                    <textarea class="msg" cols="35" rows="8">O que eu faço?</textarea>
                  
                    </div>
                  </div>        
              </form>
          </div>
          </section>
          <section class="section3 mb-5">

            <div class="input-group mb-3 d-none">
              <div class="input-group-prepend">
                <label class="input-group-text bg-success rounded f" for="inputGroupSelect01">Materiais disponiveis:</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Escolha os materais que você quer doar</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <p class="display-3 mb-5 text-dark card-body">Busque pessoas para contribuir, ajude doando com o que você puder !</p>

            <button type="button" class="btn d-none btn-success btn-lg ">Contribuir</button>

            <a href=".beneficiarios.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Buscar</a>

            <p class="lead d-none">Mensagem Amigável</p>
          </section>
        </div>
    </div>

    <section class="trabalhos pt-5 px-5 mt-5 d-none">
      <button type="button" class="btn btn-success btn-lg btn-block">Veja Meus Trabalhos</button>
      <div class="fotos mt-5">
        <div> foto 1</div>
        <div> foto 2</div>
        <div> foto 3</div>
      </div>
    </section>
  </main>

</body>
</html>

