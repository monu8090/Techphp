<?php
function calculator($a,$b,$opert)
{
    switch($opert){
        case'+':
            return $a+$b;
         
            case'-':
                return $a-$b;
             
                case'*':
                    return $a*$b;
                    
                    case'/':
                        echo $a/$b;
                       
    }
}
$first = 10;
$second = 20;
$op = '-';
echo calculator($first,$second,$op);

?>