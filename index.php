<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Entre ou Cadastre-se</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/global.css">
</head>

<body>
    <main>
        <section class="painel-login">
           <div class="card">
            <h1>Entre ou Cadastre-se</h1>
            <form action="login_usuario.php" method="post">
                <input name="email"type="email" placeholder="E-mail"/>
                <input name="senha"type="password" placeholder="Senha"/>
                <button type= "submit">Entrar</button>
            </form>
            <a href="./cadastro.php">Ainda não possui cadastro? Clique aqui.</a>
            <a href="comunidade.php">Conheça melhor a nossa comunidade.</a>
           </div>
        </section>

        <section class="painel-imagem">
            <img src="./img/login2.jpg" alt="Login">
        </section>
    </main>
</body>


</html>
