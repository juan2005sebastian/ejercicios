<?php
$sale = new Sale(10.5, date("y-m-d"));
$sale = new Sale(10.5, date("y-m-d"));
echo $sale::$count;
sale::reset();
$sale = new Sale(10.5, date("y-m-d"));

echo $sale::$count;
// $sale->createInvoice();

class Sale{
    public $total;
    public $date;
    public static $count;
    public function __construct($total, $date){
        $this->total = $total;
        $this->date = $date;
        self::$count++;
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
