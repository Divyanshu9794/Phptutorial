<?php
$fruits = array(
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple"
);
array_walk($fruits,"myfunction");
function myfunction($value,$key){
    echo "$key : $value<br>";
}


?>
