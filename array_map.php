<?php
function square($n){
    return $n*$n;
}
$a = [1,2,3,4,5];
$newarray =array_map('square',$a);
//it will map all the index of the array with the output of the function here we are mapping each index with the square of the value starting from 1
echo "<pre>";
print_r($newarray);
echo "</pre>";


?>
