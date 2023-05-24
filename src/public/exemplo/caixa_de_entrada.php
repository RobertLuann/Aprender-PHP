<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php 
        $usuarios = array();
        $usuarios['Maria']['nome'] = 'Maria da Silva';
        $usuarios['Maria']['id'] = 5974;
        $usuarios['Joao']['nome'] = 'Joao Alfredo';
        $usuarios['Joao']['id'] = 3618;
        $userLogin = $_POST['login'];
        $userId = $usuarios[$userLogin]['id'];
    ?>
    <h1>Olá! <?php echo $usuarios[$userLogin]['nome']; ?></h1>
    <form action="apagar.php" method="POST">
        <ul>
            <li>Email 1</li>
            <li>Email 2</li>
            <input type="hidden" name="id" value="<?php echo $userId; ?>">
        </ul>
    </form>
    <a href="https://www.google.com/search?q=php">Google</a>
</body>
</html>