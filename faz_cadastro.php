<?php

print_r($_POST);

$mysqli = new mysqli("localhost", "root", "", "phpproject2");
$con = $mysqli->prepare("INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = sha1($_POST['senha']);


$con->bind_param("sss", $nome, $email, $senha);
$con->execute();
$con->close();

header('location:index.php');

