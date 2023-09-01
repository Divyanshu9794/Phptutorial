<?php

// function test(&$string){
//     $string .= " add this also";
// }
// $str = "This is a string";
// test($str);
// echo $str;

function fir($num){
    $num += 5;

}
function sec(&$num){
    $num+=7;

}
$number =10;
fir($number);
echo "Original value is $number <br>";

sec($number);
echo "Original value is $number <br>";


?>