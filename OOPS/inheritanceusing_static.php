<?php 
class Atm{
    static $amount=1000;
    public static function checkblance(){
        echo self::$amount;
    }
}
class Customer extends Atm{
    public function blance(){
        echo self::$amount;
    }
}
$c = new Customer;
echo Customer::$amount;
$c->blance();
?>