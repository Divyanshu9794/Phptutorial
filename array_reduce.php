<?php
function myfunction($n,$m){
    return $n . "-" . $m;
}

$a = ['orange','banana','apple'];

// $newarray = array_reduce($a,'myfunction');
//it will concatenate all the values that are present in the array 
$newarray = array_reduce($a,'myfunction','lemon');
//it will concatenate all the values that are present in the array with the starting value lemon 

echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
