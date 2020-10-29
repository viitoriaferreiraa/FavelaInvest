<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/global.css">
</head>

<body>
    <main>
        <div class="card">
            <h1>Cadastre-se</h1>
            <form action="cadastro_usuarios.php" method="post">
            <input type="text" name="nome" placeholder="Digite o seu nome"/>
            <input type="email" name="email" placeholder="Digite o seu e-mail"/>
            <input type="password" name="senha" placeholder="Digite a sua senha"/>
            <input type="password" name="conf_senha" placeholder="Confirme sua senha"/>
            <button type="submite"><b>Cadastre-se</b></button>
            </form>
            <a href="./index.php">Já possui cadastro? Clique aqui.</a>
        </div>
    </main>

</body>


</html>
