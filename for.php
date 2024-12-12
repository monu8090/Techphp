<?php
// for(init , Condition , Updation){
//     // Statement 
// }



// Program

//   for($i=0;$i<=10;$i++){
//     echo $i."<br>";
//   } 



// for($i=0;$i<=10;$i++):
//     if($i>=5):
//        echo $i."<br>";
// endif;
// endfor;
    




// for ($i = 0; $i <= 10; $i++) {
//     if ($i < 10) {
//         echo $i . "-";
//     } else {
//         echo $i;
//     }
// }


// Sum program

// $add = 0;
// for ($i = 1; $i <= 10; $i++) {
//     $add=$add+$i; 
// }
// echo $add;


// Factorial Program


// $fact = 1

// ;
// for ($i = 1; $i <= 5; $i++) {
//     $fact=$fact*$i; 
// }
// echo $fact;




for ($i = 0; $i<= 9; $i++){
    for($j=0; $j<=9;$j++){
        if($j<9){
            echo $i."".$j.",";
        }
        else {
            echo $i."".$j;
        }
    }
    echo "<br>";
}
?>