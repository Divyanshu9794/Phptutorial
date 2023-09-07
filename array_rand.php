<?php
 $color = ["red","blue","yellow","orange"];

 $newarray = array_rand($color,2);
 //it will return any random value
shuffle($color);
//it will shuffle the values that are present in the array

echo "<pre>";
print_r($color);
echo "</pre>";

// // echo $color[$newarray];
// echo $color[$newarray[0]] . "<br>";
// echo $color[$newarray[1]];





?>