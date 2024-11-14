<?php
$sale = new Sale(10.5, date("y-m-d"));
$sale-> createInvoice();

class Sale{
    public $total;
    public $date;
    public function __construct($total, $date){
        $this->total = $total;
        $this->date = $date;
    }
    public function createInvoice(){
        echo "se creo la factura";
    }
}
