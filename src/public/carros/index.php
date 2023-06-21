<?php 

class Carro {
    // Atributos:
    public $marca = "";
    public $modelo = "";
    public $cor = "";
    public $placa = "";

    // Metodo ligar
    function ligar() {
        echo "O carro está ligado\n";
    }
    function desligar() {
        echo "O carro está desligado\n";
    }
    function acelerar() {
        echo "O carro acelera\n";
    }
};

$carro1 = new Carro();
$carro2 = new Carro();

$carro1->marca = "Tesla";
$carro1->modelo = "Roadster";
$carro1->cor= "Vermelho";
$carro1->placa = "MARTE01";

$carro2->marca = "Volkswagen";
$carro2->modelo = "Fusca";
$carro2->cor= "Azul";
$carro2->placa = "HERBIE53";

echo $carro1->marca;
echo '<br>';
echo $carro2->marca;
echo '<br>';

$carro1->desligar();
echo '<br>';
$carro1->acelerar();
echo '<br>';

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome,$idade) {
        $this->nome = $nome;
        $this->idade = $idade;

        echo 'Um objeto foi criado <br>';
    }

    function perfil() {
        echo 'Eu sou ' . $this->nome . '<br>';
        echo 'Eu tenho ' . $this->idade . ' de idade';
    }
}

$p1 = new Pessoa('Pedro',18);
$p1->perfil();

class FahrenheitToCelsius {
    public $temperatura;

    function __construct($temp) {
        $this->temperatura = $temp;
    }

    function getTemperatura() {
        return 5.0 / 9.0 * ($this->temperatura - 32);
    }
}

$x = new FahrenheitToCelsius(-68);
echo $x->getTemperatura() . '<br>';
?>