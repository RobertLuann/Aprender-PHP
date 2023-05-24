<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto 2</title>
</head>
<body>
    <?php 
        $cupons['NIVER10'] = 10;
        $cupons['PROMO15'] = 15;
        $desconto = 0;
        if($_GET['cupom']!='') {
            $desconto = $cupons[$_GET['cupom']];
        };
        $preco = 500;
    ?>
    <h1><a href="index.php"><img src=""></a>Shopping Virtual</h1>
    <img src="">
    <h3>Preço: R$ <?php echo (($preco * (100 - $desconto) / 100)); ?></h3>
</body>
</html>