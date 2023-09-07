<?php

// $a = ['orange','apple','banana ','grapes','mango'];
// sort($a);
//it will sort the value of array in ascending order 
// rsort($a);
//sort the value of array in descending order


// $a =[1,2,3,4,59,5,8,5,56,59];

// sort($a);

// $food = array(
//     "d"=>"lemon",
//     "a"=>"orange",
//     "b"=>"banana",
//     "c"=>"apple"
// );
// asort($food);
// //sort the associative array according to value
// arsort($food);
//sort the associative array in descending order  according to value


// ksort($food);
//sort the associative array according to there keys 
// krsort($food);
//sort the associative array in descending order according to there keys 



// $a = array(
//     "img12.png","img10.png","img2.png","img1.png"
// );
// natsort($a);
//sort the array according to value but consider all extension and name and number too....
// $a = array(
//     "Img12.png","img10.png","img2.png","img1.png"
// );

// natcasesort($a);
//sort same as natsort but it is case sensitive
$food = array(
    "lemon",
    "orange",
    "banana",
    "apple"
);
// array_multisort($a,$food);
//this will sort all the value present in both the array but there is one constraint that both the arrays must be of same size

$newarray = array_reverse($food);
echo "<pre>";
print_r($newarray);
echo "</pre>";

// echo "<pre>";
// print_r($food);
// echo "</pre>";

?>
