<?php 
    session_start();

    if (!isset($_SESSION['p1'])) $_SESSION['p1'] = '';

    if (isset($_POST['resposta'])) {
        $_SESSION['p1'] = $_POST['resposta'];
        header('Location: q2.php');
        exit();
    };
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="q1.php" method="post">
    <?php 
        $opcoes1['r1'] = 'R1';
        $opcoes1['r2'] = 'R2';
        $opcoes1['r3'] = 'R3';
        $opcoes1['r4'] = 'R4';
        shuffle($opcoes1);
    ?>
    <h1>Questão 1</h1>
    <?php 
        foreach($opcoes1 as $key => $value) {
    ?>
    <br>
    <input type="radio" <?php echo ($_SESSION['p1'] == $value)? 'checked' : ''; ?> name="resposta" value="<?php echo $value; ?>">
    <?php echo $value; }; ?>
    <br>
    <br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html> 