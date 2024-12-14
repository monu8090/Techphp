<?php
// array_push(array,new Element):-  it used for new Element Existing Array and it return new Array.
// $arr = [1,2,3,4,5];
// array_push($arr,6);
// print_r($arr);

//  Multiple Array  Push Function

// $arr = [1,2,3,4,5];
// array_push($arr,[6,7,8,9]);
// echo "<pre>";
// print_r($arr);


// array_pop(array):- It Remove last element  of Array.

// $arr = [1,2,3,4,5];
// array_push($arr,[6,7,8,9]);
// echo "<pre>";
// print_r($arr);
// array_pop($arr);
// print_r($arr);




// Unshift Array 

// $arr = [1,2,3,4,5];
// array_push($arr,[6,7,8,9]);
// echo "<pre>";
// print_r($arr);
// array_pop($arr);
// print_r($arr);

// array_unshift($arr,7);
// print_r($arr);




//Shift Array 

// $arr = [1,2,3,4,5];
// array_push($arr,[6,7,8,9]);
// echo "<pre>";
// print_r($arr);
// array_pop($arr);
// print_r($arr);

// array_shift($arr);
// print_r($arr);



// Two Array Merge 
// array_merge(array1,array2) :- it merge two or more array and create array a new . it return new array.

// $a= [1,2,3,4,5];
// $b= [6,7,8,9,10];
// $c = array_merge($a,$b);
//  print_r($c);




// Compact Array

// $a = 1;
// $b = 2;
// $c = "Diby";
// print_r(compact('a','b','c'));



// sorted Array
// $arr = [5,7,1,3,0,3,5];
// sort($arr);
// print_r($arr)



// Sorted Array Reverse 
// $arr = [5,7,1,3,0,3,5];
// rsort($arr);
// print_r($arr)


// Range create Array

// print_r(range('a','100'));


// Array Combine Method
//syntex : array_combine(array(key),array(value));
// $key = range('a', 'f'); 
// $value = range('0', '5'); 
// $arr = array_combine($key, $value);
// print_r($arr);




// Array Element Search 
$animal = ['Dog','cow','Elephant','Cat','Zebra'];
print_r(array_search("Cat",$animal));
?>