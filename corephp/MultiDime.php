<?php
// $arr = [
//     [
//         [1,2,3,4,5]
//     ]
//     ];
//     print_r($arr[0][0][2]);

// Second type program

// $arr = [
//     [
//         [1,2,3,4,5]
//         [6,7,8,9,10]
//     ]
//     ];
//     print_r($arr[0][0][2]);
//     print_r($arr[0][1][0]);


// Second type program

// $arr = ["Name"=>["age"=>1,3,"X"=>4,5]];
// print_r($arr['Name'][1]);



// Third Type For Each Use 


$arr = ["Name"=>["age"=>1,3,"X"=>4,5]];
// print_r($arr['Name'][1]);
foreach($arr as $val):
foreach($val as $v):
    echo $v;
endforeach;
endforeach;
?>