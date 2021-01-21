<?php

session_start();

if(!isset($_SESSION['nome'])){
    header('Location: index.php');
    echo "<script>alert('Usuário e/ou senha inválido');</script>";
    exit;
}

$nome = $_SESSION['nome'];

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <title>Olá <?php echo $nome ?></title>
</head>
<body>

  <section class="conteiner">
  <div class="flex-conteiner">
  <img src="img/Logo.jpg" alt="">
  <button>sair</button>
 
  </div>

  <div class="row mb-1 container-fluid">
    <div class="col-md-4">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <img class="rounded-right h-25" src="img/iconDoPersonagem.jpg" alt="">

          <p class="text-center">Olá <?php echo $nome ?></p>

            <div class="bg-primary">


            <form action="./beneficiarios.php" method="POST">
            <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Idade:</label>
          <div class="col-sm-10">
           <input type="text" name="" class="form-control-plaintext" id="staticEmail" value="">
            </div>
          </div>
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Contato:</label>
          <div class="col-sm-10">
           <input type="text"  class="form-control-plaintext" id="staticEmail" value="">
            </div>
          </div>
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Bairro:</label>
          <div class="col-sm-10">
           <input type="text"  class="form-control-plaintext" id="staticEmail" value="">
            </div>
          </div>
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Material necessário:</label>
          <div class="col-sm-10">
           <input type="text"  class="form-control-plaintext" id="staticEmail" value="">
            </div>
          </div>
          <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Avaliação:</label>
          <div class="col-sm-10">
           <input type="text"  class="form-control-plaintext" id="staticEmail" value="">
            </div>
          </div>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar informações</button>
            </form>
        </div>
    
      </div>
    </div>
    <div class="col-md-8">
   
    <div class="col-md-12 h-25 col-md-6 col-lg-9 shadow-sm no-gutters border rounded overflow-hidden flex-md-row mb-3 shadow-sm h-md-250 position-relative "><form>
  
    <form>
      <div class="form-group ">       
        <input type="textarea" style="height: 223px"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="O que eu faço!">
       </div>
    
      
</form>

</form><div class="well">
    </div></div>
  <div class="col-md-9  h-25 col-md-6 col-lg-9 shadow-sm no-gutters border rounded overflow-hidden flex-md-row mb-3 shadow-sm h-md-250 position-relative "><select class="form-control form-control-lg">
  <option>O que doar</option>
</select><div class="well">
  </div></div>
        

  <div class="col-md-12 h-25 col-md-6 col-lg-9  no-gutters  rounded overflow-hidden flex-md-row mb-3  h-md-250 position-relative "><form>
  
    <button type="button"  class="btn btn-primary w-50  btn-md btn-block">Contribuir</button>
 
 <p>	mensagem amigavel: sua contribuição foi enviada com sucesso ! 
o USUARIO será avisado da sua contribuição</p>
  </form><div class="well">
      </div></div>
        




      


      </div>
   
    
  </div>




  
  </section>

  <div class="container">
  <div class="row w-25">
    <div class="col-sm">
      <img class="h-50"src="img/baixar.jpg" alt="">
    </div>
    <div class="col-sm">
      <img class="h-50" src="img/baixar.jpg" alt="">
    </div>
    <div class="col-sm">
      <img class="h-50" src="img/baixar.jpg" alt="">
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 
</body>
</html>

