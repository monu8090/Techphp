<?php  
class Atm{
    static $amount=1000;
    public static function checkbalance(){
        echo self::$amount;
    }
}

echo Atm::$amount;
Atm::checkbalance();
?>