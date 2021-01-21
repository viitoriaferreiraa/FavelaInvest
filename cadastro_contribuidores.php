<?php

session_start();

$materiais = $_POST['material'];
$email = $_SESSION['email'];

$conn = mysqli_connect("localhost", "root", "", "favelainvest");
$sql = "update usuarios set materiais = '$materiais' where email='$email'";
$result = $conn->query($sql);

header("Location: ".$_SERVER['HTTP_REFERER']."");


?>
