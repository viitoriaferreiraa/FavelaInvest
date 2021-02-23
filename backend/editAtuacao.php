<?php
    require_once("./models/Usuarios.php");
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("Location: ../index.php");
        exit;
    }
    $id = $_SESSION['id_usuario'];
    $atuacao = $_SESSION['atuacao'];
    $email = $_SESSION['email'];
    
    $data = Usuarios::editAtuacao($id, $atuacao);
    echo $data;
    if ($data){
        session_destroy();
        session_start();
            $user = Usuarios::getInfo($email); 
            if ($data){
                session_destroy();
                session_start();
                    $user = Usuarios::getInfo($email);
                    $_SESSION['id_usuario'] = $usuario['id_usuario'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['tipo'] = $usuario['tipo'];
                    $_SESSION['idade'] = $usuario['idade'];
                    $_SESSION['contato'] = $usuario['contato'];
                    $_SESSION['endereco'] = $usuario['endereco'];
                    $_SESSION['materiais'] = $usuario['materiais'];
                    $_SESSION['ramo'] = $usuario['ramo'];
                    $_SESSION['atuacao'] = $usuario['atuacao'];
                echo "<script>alert('Dados alterados'); location.href = '../perfil.php'</script>";
            } 
        } else {
                echo"<script>alert('Erro ao editar informações'); location.href = '../index.php'</script>";
            }