<?php
require_once("./models/Usuarios.php");



if (isset($_POST['email']) && isset($_POST['senha'])) {

    $senha = md5($_POST['senha']);
    $email = $_POST['email'];
    // $senha_cripto = md5($senha); 
    $usuario = Usuarios::login($email, $senha);
    if (!$usuario) {
        echo "<script>
             alert('email ou senha invalido')
             window.location.href = '../index.php'
         </script>";
    } else {
        session_start();
        $usuario = Usuarios::getInfo($email);
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['tipo'] = $usuario['tipo'];
        $_SESSION['idade'] = $usuario['idade'];
        $_SESSION['contato'] = $usuario['contato'];
        $_SESSION['endereco'] = $usuario['endereco'];
        $_SESSION['materiais'] = $usuario['materiais'];
        if($_SESSION == 1) {
            header('Location: ../perfilDoador.php'); 
        } else {
            header('Location: ../perfilUsuario.php'); 
        }
    }
}   
else {
   echo "<script>
        alert('email ou senha invalido')
        window.location.href = '../index.php'
    </script>";
}



?>