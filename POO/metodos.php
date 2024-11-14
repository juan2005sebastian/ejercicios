<?php
$sale = new Sale();
$sale ->total = 10.5;
$sale -> date = date('Y-m-d');
print_r($sale);

class Sale{
    public $total;
    public $date;
    public function createInvoice(){
        echo "se crea la factura";
    }
}
