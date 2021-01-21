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
  <p class="display-4">Minha Conta (colaborador)</p>
    <div class="row">
        <?php
            $json = file_get_contents("http://localhost/FavelaInvest2.0.1/backend/apiusuarios.php");
            $data = json_decode($json, true);
            foreach ($data as $key => $row){
                $id = $row['id_usuario'];
                $materiais = explode(",", $row["materiais"]);
        ?>
            <section class= "col-4 section1 mb-5">
              <div class="painelPerfil bg-light" style="width: 18rem;">
              <img  src="./assets/imagens/1.jpeg" class="card-img-top rounded-circle imgPerfil" alt="...">
              <div class="card-body">
                <form action="#" class="painelForm form-inline">
                  <div class="form-group mb-2">
                    <label type="staticEmail2" class="sr-only">Nome: <?php echo $row["nome"]?></label>
                    <input type="text" readonly class="form-control-plaintext" id="" value="Contato: <?php echo $row["nome"]?>">
                    <input type="text" readonly class="form-control-plaintext" id="" value="Contato: <?php echo $row["contato"]?>">
                    <input type="text" readonly class="form-control-plaintext" id="" value="Endereço: <?php echo $row["endereco"]?>">
                    <input type="text" readonly class="form-control-plaintext" id="" value="Material necessário: ">
                    <select>
                      <?php
                        for($i = 0; $i < count($materiais); $i++){
                          ?>
                            <option><?php echo $materiais[$i] ?></option>
                          <?php
                        }
                      ?>
                    </select>
                    <a href="#" class="btn disabled btn-success btn-md active mr-1" role="button" aria-pressed="true">Ver perfil</a>
                  </div>
                </form>
            
              </div>
              </div>
            </section>
        <?php
            }
        ?>
      
  </main>

</body>
</html>

