<?php

/*
    2 - Validação dos dados
    3 - Cadastro em banco de dados
    4 - Desafio de trativa do e-mail
*/

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];


if (strlen($nome) >= 3 && strlen($email) >= 10 && strlen($senha) > 6 && $senha == $conf_senha) {
    $senha_cripto = md5($senha);

    $conn = mysqli_connect("localhost", "root", "", "sistema");
    $sql = "INSERT INTO usuarios (nome, email, senha) values ('$nome', '$email', '$senha_cripto')";
    $conn->query($sql);

    echo "<script>
            alert('Seu cadastro foi efetuado com sucesso!')
            window.location.href = 'cadastro.php'
        </script>
        ";
}
else if ($senha != $conf_senha) {
    echo "<script>
            alert('As senhas devem ser exatamente iguais!')
            window.location.href = 'cadastro.php'
        </script>
        ";
}
else if (strlen($nome) < 3) {
    echo "<script>
        alert('Digite um nome válido para realizar o cadastro!')
        window.location.href = 'cadastro.php'
        </script>
        ";
}

else if (strlen($email) < 10 ) {
    echo "<script>
        alert('Por favor digite um endereço de E-mail válido')
        window.location.href = 'cadastro.php'
        </script>
";

}
