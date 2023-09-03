<?php

$color =["red","blue","green","yellow"];


$fruit = ["apple","mango"];

// array_splice($color,1);
//it will delete all the values from index 1 till the end 
// array_splice($color,1,1);
// it will remove only 1 element since third parameter is 1 and will remove only the element which is at index 1'

// array_splice($color,0,count($color),$fruit);
array_splice($color,0,0,$fruit);




echo "<pre>";
print_r($color);
echo "</pre>";


?>
