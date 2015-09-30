<?php

session_start();

if ($_POST['email'] == 'usu' && $_POST['senha'] == '123') {
    $_SESSION['usuario_logado'] = true;
    $_SESSION['nome_do_usuario'] = 'USUÁRIO X';
    header('location:index.php');
} else {
    $_SESSION['usuario_logado'] = false;
    unset($_SESSION['nome_do_usuario']);
    header('location:index.php?erro_login=1');
}
