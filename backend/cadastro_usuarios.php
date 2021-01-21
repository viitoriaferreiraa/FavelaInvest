<?php

require_once("./models/Usuarios.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$tipo = $_POST['tipo'];


if (strlen($nome) >= 3 && strlen($email) >= 10 && strlen($senha) > 3 && $senha == $conf_senha) {
    $senha_cripto = md5($senha);    
    $usuario= new Usuarios($nome,$email,$senha,$tipo);
    
    if($usuario){
        echo "<script>
        alert('Cadastro efetuado!')
        window.location.href = '../index.php'
    </script>";
    }else{
        echo "<script>
        alert('Erro ao realizar cadastro!')
        window.location.href = '../index.php'
    </script>";
    }

}else if ($senha != $config_senha) {
     
    echo "<script>
    alert('As senhas devem ser iguais, tente novamente!')
    window.location.href = 'cadastro.php'
</script>";
    
}else if (strlen($email) <= 3) {
    
    echo "<script>
    alert('Digite um e-mail válido para realizar o cadastro!')
    window.location.href = 'cadastro.php'
</script>";
    
}else if (strlen($senha) <= 3) {
    
    echo "<script>
        alert('Digite uma senha válida para realizar o cadastro!')
        window.location.href = 'cadastro.php'
    </script>";
    
}else if (strlen($nome) <= 3) {

    echo "<script>
    alert('Digite um nome válido!')
    window.location.href = 'cadastro.php'
</script>";
    
}

