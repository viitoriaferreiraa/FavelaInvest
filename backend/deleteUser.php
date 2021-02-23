<?php
    require_once("./models/Usuarios.php");
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: ../index.php");
        exit;
    }
    

    $email = $_SESSION['email'];
    $data = Usuarios::deleteUser($email);
    if ($data){
        session_destroy();
        echo "<script>alert('Conta deletada'); location.href = '../index.php'</script>";
    } else {
        echo "<script>alert('Erro ao deletar a conta. Contate o suporte'); location.href = '../index.php'</script>";
}