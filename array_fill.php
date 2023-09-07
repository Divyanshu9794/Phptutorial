<?php

$a = ["a","b","c","d","e"];
// $newarray = array_fill_keys($a,"Hello");
//it will provide value to index array and make it a associatibe array
$newarray = array_fill(0,8,"Hello");
//it will array by value from starting index to the number of values


echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
