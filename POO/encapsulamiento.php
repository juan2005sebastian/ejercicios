<?php

class Persona {
    // Propiedades privadas (solo accesibles dentro de la clase)
    private $nombre;
    private $edad;

    // Método constructor para inicializar propiedades
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método público para acceder al nombre
    public function obtenerNombre() {
        return $this->nombre;
    }

    // Método público para acceder a la edad
    public function obtenerEdad() {
        return $this->edad;
    }

    // Método público para establecer el nombre
    public function establecerNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método público para establecer la edad
    public function establecerEdad($edad) {
        if ($edad > 0) { // Validación de la edad
            $this->edad = $edad;
        }
    }
}

// Crear una instancia de la clase Persona
$persona = new Persona("Juan", 30);

// Acceder a las propiedades a través de los métodos públicos
echo "Nombre: " . $persona->obtenerNombre() . "<br>"; // Imprime: Nombre: Juan
echo "Edad: " . $persona->obtenerEdad() . "<br>"; // Imprime: Edad: 30

// Modificar las propiedades usando los métodos públicos
$persona->establecerNombre("Pedro");
$persona->establecerEdad(35);

// Acceder a las nuevas propiedades modificadas
echo "Nuevo nombre: " . $persona->obtenerNombre() . "<br>"; // Imprime: Nuevo nombre: Pedro
echo "Nueva edad: " . $persona->obtenerEdad() . "<br>"; // Imprime: Nueva edad: 35

?>