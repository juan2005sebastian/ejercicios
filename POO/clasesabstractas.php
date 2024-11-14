<?php
// Clase abstracta
abstract class Vehiculo {
    public $marca;

    public function __construct($marca) {
        $this->marca = $marca;
    }

    // Método abstracto (debe ser implementado en la clase hija)
    abstract public function conducir();
}

// Clase derivada
class Coche extends Vehiculo {
    public function conducir() {
        echo "El coche " . $this->marca . " está conduciendo.\n";
    }
}

$miCoche = new Coche("Toyota");
$miCoche->conducir();  // Implementación de método abstracto
?>