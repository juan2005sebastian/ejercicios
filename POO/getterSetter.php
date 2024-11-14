<?php

class Persona {
    // Propiedades privadas
    private $nombre;
    private $edad;

    // Método constructor para inicializar las propiedades
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Getter para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para establecer el nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter para obtener la edad
    public function getEdad() {
        return $this->edad;
    }

    // Setter para establecer la edad
    public function setEdad($edad) {
        if ($edad > 0) { // Validación para asegurar que la edad sea positiva
            $this->edad = $edad;
        }
    }
}

// Crear una instancia de la clase Persona
$persona = new Persona("Juan", 30);

// Usar getters para acceder a las propiedades
echo "Nombre: " . $persona->getNombre() . "<br>"; // Imprime: Nombre: Juan
echo "Edad: " . $persona->getEdad() . "<br>"; // Imprime: Edad: 30

// Usar setters para modificar las propiedades
$persona->setNombre("Pedro");
$persona->setEdad(35);

// Usar getters nuevamente para ver los cambios
echo "Nuevo nombre: " . $persona->getNombre() . "<br>"; // Imprime: Nuevo nombre: Pedro
echo "Nueva edad: " . $persona->getEdad() . "<br>"; // Imprime: Nueva edad: 35

?>