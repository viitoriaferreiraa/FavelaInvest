<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

echo $email, $senha;

  if(strlen($email) > 3 && strlen($senha) > 3) {
   $conn= mysqli_connect("localhost","root","","sistema");

   //execução da instrucão sql
   $resultado_consulta=$conn->query("SELECT * from usuarios ");
   //$usuarios receba a lista de usuarios
   $usuarios= mysqli_fetch_all($resultado_consulta);
   
  
    $_SESSION['nome']=$usuarios[0][3];
    $_SESSION['email']=$usuarios[0][1];
    $_SESSION['senha']=$usuarios[0][2];


    echo $_SESSION['nome'];
    echo $_SESSION['email'];
    echo $_SESSION['senha'];

     header('Location: home.php');
}

else {
    echo "
         <script>
           alert('Email ou senha inválidos!');
           location.href = 'index.php'
           </script>
      
      ";
     
  }
  