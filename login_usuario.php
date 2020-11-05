<?php

session_start();
$email = $_POST['email'];
$senha = md5($_POST['senha']);

if (strlen($email)>3 && strlen($senha) >3 ) {
    $conn = mysqli_connect("localhost", "root", "", "favelainvest");
    $sql = "select * from usuarios where email='$email' and senha='$senha'";
    $result = $conn->query($sql);
    $usuarios = mysqli_fetch_all($result);

    $_SESSION['nome']  =$usuarios[0][1];
    $_SESSION['email'] =$usuarios[0][2];
    $_SESSION['senha'] =$usuarios[0][3];
    header('location:home.php');

}
else {
   echo "<script>
        alert('email ou senha invalido')
        window.location.href = 'index.php'
    </script>";
}

?>
