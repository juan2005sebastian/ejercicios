<?php
abstract class Figura {
    abstract public function calcularArea();
}

class Cuadrado extends Figura {
    public $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Circulo extends Figura {
    public $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// Crear instancias y calcular áreas
$cuadrado = new Cuadrado(4);
echo "Área del cuadrado: " . $cuadrado->calcularArea() . "<br>";

$circulo = new Circulo(3);
echo "Área del círculo: " . $circulo->calcularArea() . "<br>";

