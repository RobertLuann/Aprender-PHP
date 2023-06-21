<?php 
    session_start();

    $erro = $_SESSION['erro'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="logar.php" method="POST">
        <?php if ($erro){ ?>
        <img src="">
        <strong>Login ou senha incorreta</strong>
        <br> <br>   
        <?php }; ?>

        Login: <input type="text" name="login"> <br> <br>
        Senha: <input type="password" name="senha"> <br> <br>
        <button type="submit" value="Enviar">Enviar</button>
    </form>
</body>
</html>