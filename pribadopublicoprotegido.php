<?php
class Persona {
    public $nombre;
    protected $edad;
    private $documento;

    public function __construct($nombre, $edad, $documento) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->documento = $documento;
    }

    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . "<br>";
    }

    protected function obtenerDocumento() {
        return $this->documento;
    }

    private function modificarDocumento($nuevoDocumento) {
        $this->documento = $nuevoDocumento;
    }
}

// Crear instancia y probar accesibilidad
$persona = new Persona("Juan", 30, "12345678");
echo $persona->nombre . "<br>"; // Público: accesible
$persona->mostrarInformacion(); // Muestra nombre y edad

