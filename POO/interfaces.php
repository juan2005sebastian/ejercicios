<?php
interface SendInterfece{
    public function send(string $message); 
}

interface SaveInterfece{
    public function save(string $message); 
}

class Documento implements SendInterfece, SaveInterfece{
    public function send(string $message){
        echo "Se envia la venta: " . $message; 
    }

    public function save(string $message){
        echo "Se guarda la venta en la nube: " . $message; 
    }
}

class Repository implements SaveInterfece{
    public function save(string $message){
        echo " Se guarda la factura en la base de datos: " . $message; 
    }
}

class SaveProcess{
    private SaveInterfece $saveManager; 

    public function __construct(SaveInterfece $saveManager){
        $this->saveManager = $saveManager; 
    }

    public function keep(){
        echo "Hacemos algo antes. "; // Agregado punto y coma aquí
        $this->saveManager->save("Mensaje de prueba"); // Se pasó un mensaje de ejemplo
    }
}

$repository = new Repository(); 
$documento = new Documento(); 
$saveProcess = new SaveProcess($repository); 
$saveProcess->keep(); 
?>