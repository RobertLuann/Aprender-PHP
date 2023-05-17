<html lang="pt-BR">
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

        echo '<br>';

        $tanque = 1;

        echo $tanque <= 1 ? 'Abastecer agora <br>' : 'Combustivel OK <br>';

        $statustanque = $tanque <= 1 ? false : true;

        if($statustanque) echo 'Combustivel OK';
        else echo 'Procurar um posto para abastecer.';

        echo '<br>';

        // $vegetais = array('jerimum','batata','tomate');

        // echo 'Hoje vou cozinhar ' . $vegetais[0] . '<br>';
        // echo 'Hoje vou cozinhar ' . $vegetais[1] . '<br>';
        // echo 'Hoje vou cozinhar ' . $vegetais[2] . '<br>';

        // echo 'Quantidade de vegetais: ' . count($vegetais);

        // $vegetais[10] = 'repolho';
        // echo "<br>" . $vegetais[10] . '<br>';
        // print_r($vegetais);

        $vegetais = array(
            'jerimum' => '',
            'batata' => '',
            'tomate' => '');
        
            foreach($vegetais as $chave=>$valor){
                echo 'Hoje vou cozinhar ' . $chave . "<img src='$valor' > <br>";
            };

        $estoqueCarros = array(
            array('Palio', 10, 125),
            array('Uno', 15, 200),
            array('Gol', 4, 38)
        );

        echo 'Temos: ' . $estoqueCarros[0][1] . ' ' . $estoqueCarros[0][0] . '<br>Vendidos: ' . $estoqueCarros[0][2];

        echo '<br>';

        print_r($estoqueCarros);

        echo '<br>';

    ?>
    <br>
    <form method="post" action="index.php">
        Nome: <input type="text" name="nome">
        <input type="submit">
    </form> 
    <?php
    if(empty($_POST['nome'])){
        echo 'Nome é um campo obrigatório.';
    } else {
        echo $_POST['nome'] . ', obrigado por se inscrever!';
    };

    ?>


    <?php
        $data = date('d/m/Y');
        $hora = date('H');
        if($hora < 12){
            $mensagem = "Bom dia! <img src='https://i.pinimg.com/736x/48/81/de/4881de7d28d76349af48a21da9776035--pasta.jpg' >";
        } elseif(date('H') > 11 && date('H') < 18) {
            $mensagem = "Boa tarde! <img src='https://frasesparapostar.com.br/wp-content/uploads/2022/08/frases-de-boa-tarde.jpg'>";
            $mensagem .= 'Aceita chá?';
        } elseif(date('H') > 17) {
            $mensagem = "Boa noite! <img src='https://mensagensfeliz.com.br/wp-content/uploads/2021/04/familia-mensagens-de-boa-noite-para-facebook-e-whatsapp-1.jpg'>";
        };
    ?>
    <br>
    Olá! <?php echo $mensagem; ?>
    <br>
    <?php
        $tamanhoString = strlen('PHP');
        echo 'Tamanho da string PHP = ' . $tamanhoString;
    ?>
    <br>
    <p>Função Olá:</p>
    <?php 
        function strconcat($palavra1, $palavra2) {
            return $palavra1 . $palavra2;
        }
        echo strconcat('Olá', ' Mundo!');
    ?>
    <br>
    <?php 
        $a = 3;
        function teste() {
            // $a += 2;
        };
        teste();
        echo $a;
    ?>
    <br>
    <?php
        function contador() {
            static $total = 0;
            return $total++;
        };
        for ($i = 1; $i <= 5; $i++) {
            echo contador();
        };
    ?>
    <br>
    <?php 
        function dobro(&$numero) {
            $numero = $numero * 2;
        };
        $a = 4;
        dobro($a);
        echo $a;
    ?>
    <br>
    <?php 
        function pagamento($desconto=2) {
            echo 'O desconto foi de: ' . $desconto . '%';
        };
        pagamento();
    ?>


    </body>
</html>