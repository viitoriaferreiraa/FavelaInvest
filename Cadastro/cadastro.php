<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FavelaInvest - Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="../assets/img/favelalogo.png" rel="icon">
    <link href="../assets/img/favelalogo.png" rel="apple-touch-icon">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
    <main id="main_cadastro" class="d-flex mt-0 h-100">        
        <section  class="container-cadastro mx-0 w-50 h-100 d-md-flex flex-column justify-content-sm-around align-items-sm-center">
        <form action="../backend/cadastro_usuarios.php" method="POST" classe="form-group w-75 h-100">          
            <legend class="text-white mt-3">Cadastre-se</legend>
            <label class="w-75 text-white" for="nome" id="lNome">Nome</label>
            <input class="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="text" name="nome" id="nome" />
            <label class="w-75 text-white" for="email" id="lEmail">Email</label>
            <input class="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="email" name="email" id="email" />
            <label class="w-75 text-white" for="senha" id="lSenha">Senha</label>
            <input class="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="password" name="senha" id="senha" />
            <label class="w-75 text-white" for="email" id="lEmail">Confirmação da Senha</label>
            <input class="form-control-sm w-75 bg-transparent border-top-0 border-right-0 border-left-0 border-bottom text-white" required type="password" name="conf_senha" id="senha2" />
            <div class="form-check form-check-inline w-25 mt-3">
                <input class="form-check-input" type="radio" name="tipo"  value="1" checked  />
                <label class="form-check-label" for="inlineRadio1">Colaborador</label>
            </div>
            <div class="form-check form-check-inline w-25">
                <input class="form-check-input" type="radio" name="tipo" value="2" />
                <label class="form-check-label" htmlFor="inlineRadio2">Beneficiario</label>
            </div>
            <div class="btn-group w-75 mt-3" role="group" aria-label="Basic example">
                <a class="btn d-md-flex text-white w-25" href="../Login/login.php" role="button">Já possui cadastro?</a>
                <button type="submit" class="btn btn-outline btn-lg ml-5 text-white border-light">Cadastrar</button>
            </div>
        </form>
        </section>
    <section class="container-img  w-50 h-100 d-md-flex justify-content-sm-center align-items-sm-center align-self-sm-center">
        <img src="../assets/imagens/rectangle.png" class="img-fluid" />
    </section>

        </main>
    
</body>
</html>