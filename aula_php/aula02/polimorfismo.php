<?php
class Carro extends Veiculo
{
    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }

    function abrirTeto()
    {
        echo 'Abrindo Teto';
    }

}

class Moto extends Veiculo
{
    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }

    function empinar()
    {
        echo 'Empinando';
    }

    //polimorfismo - a mesma funcao usada na classe Veiculo (só foi sobreescrito para moto!)
    function passarMarcha()
    {
        return 'Segurar com a mao na embreagem colocar com o pe na marcha';
    }

}

class Veiculo
{
    public $placa;
    public $cor;
    public $marca;

    function freiar()
    {
        echo 'Freiando';
    }

    //Adicionar uma funcao passar marcha
    function passarMarcha()
    {
        return 'Pisar o pé na embreagem colocar com a mao a marcha';
    }
}

$car = new Carro();
$car->__set('placa', 'ody-2588');
$car->__set('cor', 'vermelho');
$car->__set('marca', 'honda');
// $car->freiar();
// print_r($car);


echo 'Carro'; 
echo $car->passarMarcha();

echo '<br>';

$moto = new Moto();
$moto->__set('placa', 'yyd-8080');
$moto->__set('cor', 'branco');
$moto->__set('marca', 'yamaha');
// $moto->empinar();
// print_r($moto);

echo 'Moto';
// usando o polimorfismo a funcao vai ser a mesma só que sobreescrito
echo $moto->passarMarcha();

?>
