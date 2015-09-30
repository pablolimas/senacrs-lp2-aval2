
<?php

session_start();

$_SESSION['cadastro'][] = $_POST;

header('location:funcionarios.php');
