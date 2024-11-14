<?php
// declare(strict_types=1);
$sale = new Sale(10.5, date("y-m-d"));
$concept = new Conept("Cerveza",10);
$sale->addConcept($concept);
$sale->addConcept(1);
print_r($sale->concepts);

//echo gettype ($sale->total);
//echo sale->createInvoice();


class Sale{
    public float  $total;
    public string $date;
    public array $concepts;
    public static count;

    public function __construct(float $total, string $date){
        $this->total = $total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }
    public function addConcept(Concept $concept){
        $this->concepts[] = $concept;
    }

    public static function reset(){
        self::$count = 0;
    }
    public function __destruct()
    {
        echo "se ha eliminado el objeto";

    }
    public function createInvoice(){
        echo "se creo la factura";
    }
}