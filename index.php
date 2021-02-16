<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Favela Invest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/global.css">
</head>

<body id="root" class="flex-column container d-flex">

<main class="d-flex flex-column m-auto justify-content-center">
    <div class="m-auto">
      <img class="m-5" src="./assets/imagens/favelalogo.png" width="400" alt="logo">  
    </div>
    <section class="d-flex flex-column m-auto justify-content-center painel-login" >
        <div class="d-flex flex-column">
            <div class="m-auto d-flex row">
                <h2 class="col-12 m-auto justify-content-center d-flex">Entre ou Cadastre-se</h2>
                <form class="d-flex m-auto p-4 col-12 row" action="./backend/login_cadastro.php" method="post">
                    <input class="col-12 m-1" type="email" name="email" placeholder="E-mail"/>
                    <input class="col-12 m-1" type="password" name="senha" placeholder="Senha"/>
                    <div class="d-flex flex-column m-auto">
                        <button class="col-12 btn btn-info m-1">Entrar como BENEFICIADO</button>
                        <button class="col-12 btn btn-info m-1 ">Entrar como COLABORADOR</button> 
                    </div>
                </form>   
            </div>
        </div>
        </section>
        <section class=" m-3 d-flex flex-column painel-imagem row">

            <div class="m-1">
                 <a class=" text-light bg-info font-weight-bold text-decoration-none d-flex justify-content-center m-auto" href="./cadastro.php">Ainda não possui cadastro? Clique aqui.</a>
            </div>
 
            <div class="m-1">
                 <a class="  text-light bg-info text-decoration-none font-weight-bold d-flex justify-content-center m-auto" href="./comunidade.php">Conheça melhor a nossa comunidade.</a>
            </div>
           
           
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>