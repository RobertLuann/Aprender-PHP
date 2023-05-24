<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping mt incrivel</title>
</head>
<body>
    <?php 
        $cupom = trim($_GET['cupom']);
        $cupomValidos = array('NIVER10','PROMO15');
        $cupomAceito = in_array($cupom, $cupomValidos);
    ?>
    <h1><a href="index.php"><img src=""></a>Shopping Virtual</h1>
    <ul>
        <li><a href="p1.php<?php echo ($cupomAceito)?'?cupom=' . $cupom:''; ?>">Produto 1</a></li>
        <li><a href="p2.php<?php echo ($cupomAceito)?'?cupom=' . $cupom:''; ?>">Produto 2</a></li>
    </ul>
    <form action="index.php" method="GET">
        Cupom de desconto: 
        <?php 
            if ($cupomAceito) {
        ?>
        <strong> <?php echo $cupom; ?></strong>
        <img src="" alt="">
        <?php } else { ?>
        <input type="text" name="cupom"><input type="submit" value="Enviar">
        <?php }; ?>
    </form>
</body>
</html>