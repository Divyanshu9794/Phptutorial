<?php

// $str = "Hello Myself Divyanshu Singh.";

// $newarray=explode(" ",$str,3);
//ye string ko seperate kr dega space s 
//3rd value 3 btayega ki kitte index ka array rahega 

//output dega

// Array
// (
//     [0] => Hello
//     [1] => Myself
//     [2] => Divyanshu
//     [3] => Singh.
// )


$color = ["red","blue","green"];
    


$newarray=implode("<br>",$color);
//this will merge all the value of a array into a string
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
echo $newarray;


?>
