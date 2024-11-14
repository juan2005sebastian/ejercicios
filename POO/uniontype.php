<?php

// Crear una instancia de la clase Venta
$venta = new Venta(1280, date("Y-m-d"));
$venta->creacionFactura();

// Acceder a la propiedad estática
Venta::$totalVentas = 5000;  // Asignar valor a la propiedad estática
echo "<br>Total de ventas: " . Venta::$totalVentas; // Imprimir propiedad estática

// Llamar al método estático sin crear una instancia
Venta::crearFacturaEstatica();

// Definición de la clase Venta
class Venta {
    // Propiedades con tipos de datos (union type)
    public float|int $total;  // Propiedad no estática que puede ser un float o un int
    public string $fecha;     // Propiedad no estática de tipo string
    
    // Propiedad estática con tipo (se puede poner un union type)
    public static float|int $totalVentas = 0;  // Propiedad estática que puede ser un float o un int

    // Constructor con tipado de parámetros
    public function __construct(float|int $total, string $fecha) {
        $this->total = $total;
        $this->fecha = $fecha;
    }

    // Método no estático con tipado de retorno
    public function creacionFactura(): void {
        echo "Se crea la factura para la venta de $this->total con fecha $this->fecha<br>";
    }

    // Método estático con tipado de retorno
    public static function crearFacturaEstatica(): void {
        echo "Se crea la factura estática (sin necesidad de instancia).<br>";
    }
}