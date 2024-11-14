<?php
class Empleado {
    public $nombre;
    protected $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }
}

class Gerente extends Empleado {
    public function mostrarSalario() {
        if ($this->salario > 5000) {
            echo "Salario del gerente: " . $this->salario . "<br>";
        } else {
            echo "El salario es confidencial.<br>";
        }
    }
}

// Crear instancia de Gerente
$gerente = new Gerente("Laura", 6000);
$gerente->mostrarSalario(); // Muestra salario si es mayor a 5000

