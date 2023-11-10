<?php

    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];

    if($login == 'adm' && $senha == '123'){
        header('Location: restrito/cadastro.php');
        session_start();

        $_SESSION['login-sessao'] = $login;
        $_SESSION['senha-sessao'] = $senha;
    }else {
        header('Location: index.php');
    }

?>