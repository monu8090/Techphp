<?php
// $str = "Good Morning";
// echo strlen($str);


// 1.  Trime function 

// $str = "  Good Morning";
    // $str1 ="Ram  is good boys";

// echo strlen($str);

// // L-trime : -  it remove left side whitespace.
// // R- trime :- it remove right side whitespace.
// trim($str);
// echo $str;



// 2. str_repeat

//str_repeat (String,Time): It repeat String For given Time.And return str_repeat String.

// echo str_repeat('hey',10);

// for($i=0; $i<=10;$i++){
// echo "hey";
// }



// 3. Str_replace function Use 
//str_replace(replaced string,replace by string,string) :- It replace String


// $string = "Hello World";
// echo str_replace("World","Ram","$string");




// Expload() Function use.
// Expload() Hamara String Ko Array form me convert karta  hai. eske 2 parameter hote hai ek separator and String. Aur ye array return karta hai .

// $str = "It is exploed function for String to array Conversion.";
// print_r(explode())
// // $arr = explode(" ",$str);





// Impload ():-  Impload work is Array to String Convert . determine  and it return a string.


// $arr =["It","is","impload","Function","For","Array","TO","String","Conversion"];
// echo implode("1",$arr);




// Split function Use 

// $var = "Diby";
// print_r(str_split($var));






// Str_word_count(string):- it return word count of given string.

// echo str_word_count("Hello World.thimngs");




// String Reverse function

// $str = "Hello Word";

// $rev = strrev($str);
// echo $rev;


// $string = ""; 
// $str = "Hello World";

// for ($i = strlen($str) - 1; $i >= 0; $i--) {
//     $string .= $str[$i];
// }
// echo $string;


// second type

// echo strrev("Hello World");


// $string = "Hello World";
// echo "<br>";
// echo str_replace("World","dlorW","$string");




// Program :-  LC Function
// lcfirst(String):-  It convert first letter in lowercasecase of string.
// it return  lowercase String.


// $str = "Hello World";
// echo lcfirst($str);




// $str = "hello World";
// echo ucfirst($str);




// $str = "hello world";
// echo ucwords($str);


// Program:-   StrTOUpperFunction :-- it convert String Lower to upper Case.
// Syntax:- strtoupper(String)


// $str = "hello world";
// echo strtoupper($str);

// $str = "HELLO WORD";
// echo strtolower($str);



$str = "HELLO woRlD";
echo substr($str,1,3)
?>





