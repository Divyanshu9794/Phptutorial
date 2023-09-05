<?php
$a = array(
    "BILL" =>10,
    "Joe" =>20,
    "peter" =>30
);
// $newarray = array_flip($a);//it will flip array key with value
// $newarray = array_change_key_case($a,CASE_UPPER);
//convert the key in upper case
$newarray = array_change_key_case($a,CASE_LOWER);
echo "<pre>";
print_r($newarray);
echo "</pre>"; 




?>