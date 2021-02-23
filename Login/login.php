<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FavelaInvest - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="../assets/img/favelalogo.png" rel="icon">
    <link href="../assets/img/favelalogo.png" rel="apple-touch-icon">
    <link href="styles.css" rel="stylesheet" type="text/css">

</head>
<body>
    <main id="main" class="d-flex justify-content-center align-items-center h-100">
        <section class="container-login">
        <img id="foto" src='../assets/imagens/foto.png' alt="Foto" />
        <form action="../backend/login_cadastro.php" method="POST" >          
            <legend>LOGIN</legend>
            <label for="email" id="lEmail">Email</label>
            <input required type="text" name="email" id="email" />
            <label for="senha" id="lSenha">Senha</label>
            <input required type="password" name="senha" id="senha" />
            <button type="submit">Entrar</button>
            <a class="texto1" href="../index.php">Conheça-nos</a>
            <a class="texto1" href="#">Esqueçeu a senha?</a>
            <a class="texto2" href="../Cadastro/cadastro.php">Ainda não possui uma conta?</a>
        </form>
        </section>
    </main> 
</body>
</html>