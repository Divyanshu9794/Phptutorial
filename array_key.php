<?php
// $color = ["red","blue","yellow","orange"];
$color = ["first"=> "red","second"=>"blue","third"=>"yellow","fourth"=>"orange"];

// $newarray =  array_keys($color);
// $newarray =  array_key_first($color);
// $newarray =  array_key_exists("third",$color);
$newarray =  key_exists("third",$color);
//this can be used in if else conditional statement since it return 1 or 0 based on result


echo "<pre>";
print_r($newarray);
echo "</pre>";



?>
