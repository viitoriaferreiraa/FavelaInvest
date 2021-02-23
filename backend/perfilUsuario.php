<?php

session_start();

if(!isset($_SESSION['nome'])){
    header('Location: index.php');
    echo "<script>alert('Usuário e/ou senha inválido');</script>";
    exit;
}

$nome = $_SESSION['nome'];
$idade = $_SESSION['idade'];
$endereco = $_SESSION['endereco'];
$ramo = $_SESSION['ramo'];
$atuacao = $_SESSION['atuacao'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Olá <?php echo $nome ?></title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="../assets/img/favelalogo.png" rel="icon">
    <link href="../assets/img/favelalogo.png" rel="apple-touch-icon">
    <link href="../Beneficiario/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
        <div class="flex-conteiner my-5 ml-5 pt-5">
          <a class="btn-primary btn" href="logout.php">SAIR</a> 
          <a class="btn-primary btn" href="deleteUser.php">Deletar conta</a>
        </div>
        
    <main class="d-sm-flex flex-column justify-content-center align-items-center align-self-center">  
      <div class="linha">
        <section class="section1 my-5 ml-5 bg-light rounded-lg">
        <form class="d-sm-flex flex-column justify-content-center align-items-center align-self-center">   
        <img class="h-25 w-50 rounded-circle img-fluid " src='../assets/img/testimonials/test4.jpg'/>
            <h5 class="lead display-4 text-center text-primary"><p class="text-primary text-center">Olá <?php echo $nome ?></p></h5>
            <h3 class="lead text-dark">Ramo: </h3><p class="text-primary text-center" ><?php echo $ramo ?></p>
            <h3 class="lead text-dark">Idade: </h3><p class="text-primary text-center"><?php echo $idade ?></p>
            <h3 class="lead text-dark">Local: </h3><p class="text-primary text-center"><?php echo $endereco ?></p>
        </form>
          </section>
        <form action='editAtuacao.php' class=" justify-content-center align-items-center align-self-center">
          <div class="form-group section1 my-5 ml-5 bg-light rounded-lg ">
            <h2>O que eu faço:</h2>
            <p><?php echo $atuacao ?></p>      
            <input name="atuacao" type="textarea" style="height: 300px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="O que eu faço!">
            <button type="submit" class="btn btn-primary btn my-5 ml-5">Publicar</button>
           </div>
       </form>
        </div>
        <h5 class="d-block lead mx-5 text-dark text-sm-center display-4">Veja Meus Trabalhos</h5>
        <hr class="bg-dark w-50" />
        <section class="trabalhos px-5">
          <button type="button" class="btn btn-primary btn-lg">Contribuir</button>
          <div class="fotos mt-5">
            <div><img class="w-100 h-100" src="../assets/imagens/perfil.jpeg" alt="" /></div>
            <div> <img class="w-100 h-100" src="../assets/imagens/perfil2.jpeg" alt="" /></div>
            <div> <img class="w-100 h-100" src="../assets/imagens/perfil3.jpeg" alt="" /></div>
          </div>
        </section>
        </main>
    
</body>
</html>
