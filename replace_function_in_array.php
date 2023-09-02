<?php

$fruits = ['orange','banana','apple','grapes'];

$veggie = ['carrot','pea'];

$newarray = array_replace($fruits,$veggie);

echo "<pre>";

print_r($newarray);

echo "</pre>";

?>
