<?php

// echo'<pre>';
// print_r($_POST);
// echo'</pre>';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$conf_senha = md5($_POST['conf_senha']);


if (strlen($nome) >= 3 && strlen($email) >= 10 && strlen($senha) > 3 && $senha == $conf_senha) {
    $senha_cripto = md5($senha);
    // $conn = mysqli_connect(host, user, senha, database);
    $conn = mysqli_connect("localhost", "root", "", "favelainvest");
    $sql = "INSERT INTO  usuarios(nome, email,senha) value('$nome','$email', '$senha_cripto')";

    $conn->query($sql);


    echo "<script>
        alert('Cadastro efetuado!')
        window.location.href = 'index.php'
    </script>";
    
    // echo "Cadastro efetuado";
}elseif ($senha != $config_senha) {
     
    echo "<script>
    alert('As senhas devem ser iguais, tente novamente!')
    window.location.href = 'cadastro.php'
</script>";
    
}elseif (strlen($email) <= 3) {
    
    echo "<script>
    alert('Digite um e-mail válido para realizar o cadastro!')
    window.location.href = 'cadastro.php'
</script>";
    
}elseif (strlen($senha) <= 3) {
    
    echo "<script>
        alert('Digite uma senha válida para realizar o cadastro!')
        window.location.href = 'cadastro.php'
    </script>";
    
}elseif (strlen($nome) <= 3) {
    
    echo "<script>
    alert('Digite um nome válido!')
    window.location.href = 'cadastro.php'
</script>";
    
}