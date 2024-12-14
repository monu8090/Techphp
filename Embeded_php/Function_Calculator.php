<?php
function calculator($a,$b,$opert)
{
    switch($opert){
        case'+':
            echo $a+$b;
            break;
            case'-':
                echo $a-$b;
                break;
                case'*':
                    echo $a*$b;
                    break;
                    case'/':
                        echo $a/$b;
                        break;
    }
}
calculator(10,2,'-');

?>