<?php
function defaultArgu($age=17){
    if($age>18){
        return "Eligible for vote";

    }
    else {
        return "Not Eligible For vote";
    }
}
echo defaultArgu(21);
?>