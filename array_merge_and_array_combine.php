<?php

// $fruits = ['orange','banana','apple','grapes'];

// $veggie = ['carrot','pea'];
// $c = [1,2,3,3,5,6,7,9,7];



// $newarray = array_merge($fruits,$veggie,$c);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";
// $fruits = ['a'=>'orange',
// 'b'=> 'banana','c'=>'apple','d'=>'grapes'];

// $veggie = ['carrot','pea'];
// $c = [1,2,3,3,5,6,7,9,7];



// $newarray = array_merge($fruits,$veggie,$c);
// $newarray = $fruits + $veggie;
// $newarray = array_merge_recursive($fruits,$veggie);
// echo "<pre>";
// print_r($newarray);
// echo "</pre>";

$name = array('aman','mohan ','shyam ');
$age = array("35","37","26");
$newarray = array_combine($name , $age);

echo "<pre>";
print_r($newarray);
echo "</pre>";



?>
