<?php 
session_start();

if (!$_SESSION['sessao']) header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo</title>
</head>
<body>
    <h1>Usuário: <?php echo $_SESSION['user']; ?></h1>
    <h1>Saldo: R$400.00</h1>
    <a href="sair.php">Sair</a>
</body>
</html>