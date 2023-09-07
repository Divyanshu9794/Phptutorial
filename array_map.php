<?php
function square($n,$m){
    return [$n =>  $m];
}//now this will create a multidimensional
$a = [1,2,3,4,5];
$b = ['lemon','orange','banana','apple','guava'];
// $newarray =array_map('square',$a,$b);
//it will map all the index of the array with the output of the function here we are mapping each index with the square of the value starting from 1
$newarray =array_map(null,$a,$b);
//this will create a 2d array picking up 1 value from array 1 and other value from array 2
echo "<pre>";
print_r($newarray);
echo "</pre>";


?>
