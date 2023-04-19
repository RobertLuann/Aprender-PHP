<html>
    <head>
        <title>Aprendendo PHP</title>
    </head>
    <body>
    <?php
        /* 
        $primeiro_nome = "Maria";
        echo $primeiro_nome;
        echo "<br>";
        $ultimo_nome = "Lourdes";
        echo $ultimo_nome;
         */
        $time = array('Maria', 'Robert', 'Ana');

        echo $time[2];

        echo "<br>";

        print_r($time);

        echo '<br>';

        echo 'a: ['. TRUE . ']<br>';
        echo 'b: ['. FALSE . ']<br>';

        echo 'c: ['. (20 > 9) . ']<br>';
        echo 'd: ['. (5 == 6) . ']<br>';
        echo 'e: ['. (1 == 0) . ']<br>';
        echo 'f: ['. (1 === '1') . ']<br>';

        $nome = 'Robert';
        $idade = 18;

        echo 'a: ['. 73 .']<br>';
        echo 'b: ['. 'Oi' .']<br>';
        echo 'c: ['. $nome .']<br>';
        echo 'd: ['. $idade .']<br>';
        
        echo '<br>';

        $saldo = 10;
        if ($saldo < 100) {
            $deposito = 1000;
            $saldo += $deposito;
        } else {
            $saldo -= 50;
        };
        echo "Saldo: $saldo";

        echo '<br>';

        $menu = 'sobre';
        switch ($menu) {
            case 'index':
                echo 'Escolheu a página Inicial.';
                break;
            case 'sobre':
                echo 'Escolheu a página Sobre.';
                break;
            case 'novidades':
                echo 'Escolheu a página Novidades.';
                break;
            case 'links':
                echo 'Escolheu a página Links.';
                break;
            default:
                echo 'Pagina não encontrada!';
                break;  
        };
    ?>
    </body>
</html>