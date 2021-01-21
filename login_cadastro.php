<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3  ) {
    $conn = mysqli_connect("localhost", "root", "", "favelainvest");
    $sql = "select * from usuarios where email='$email' and senha='$senha'";
    $result = $conn->query($sql);
    $usuarios = mysqli_fetch_all($result);

    $_SESSION['nome']  = $usuarios[0][1];
    $_SESSION['email'] = $usuarios[0][2];
    $_SESSION['senha'] = $usuarios[0][3];
    $_SESSION['idade'] = $usuarios[0][4];
    $_SESSION['contato'] = $usuarios[0][5];
    $_SESSION['endereco'] = $usuarios[0][6];
    $_SESSION['tipo'] = $usuarios[0][7];
    $_SESSION['materiais'] = $usuarios[0][9];

    if ($_SESSION['tipo'] == 2) {
        echo "<script>window.location.href = './perfilUsuario.php';</script>";
    } else if ($_SESSION['tipo'] == 1) {
        echo "<script>window.location.href = './perfilDoador.php';</script>";    
    }
}   
else {
   echo "<script>
        alert('email ou senha invalido')
        window.location.href = './index.php'
    </script>";
}



?>