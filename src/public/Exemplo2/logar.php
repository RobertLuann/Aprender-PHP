<?php 
session_start();

if (($_POST['login']=='maria')&&($_POST['senha']==123)) {
    $_SESSION['sessao_valida'] = true;
    $_SESSION['user'] = $_POST['login'];
    $_SESSION['permissao'] = array('saldo','transferir');
} else {
    $_SESSION['erro'] = true;
};

header('Location: saldo.php');
?>  