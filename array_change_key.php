<?php
$a = array(
    "Bill" =>10,
    "Joe" =>20,
    "peter" =>30
);
// $newarray = array_flip($a);//it will flip array key with value
$newarray = array_change_key_case($a);
echo "<pre>";
print_r($newarray);
echo "</pre>"; 




?>