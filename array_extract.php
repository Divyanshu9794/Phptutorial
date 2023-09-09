<?php
// $a = 'orange';
// $color = array(
//     'a'=>'red',
//     'b'=>'green',
//     'c'=>'blue'
// );

// // extract($color);
// // echo "value of a :$a <br>";//this will print array value at index a instead a is defined earlier that will not affect the array values
// // echo "value of b :$b <br>";//this will print array value at index b
// // echo "value of c :$c <br>";


// // extract($color,EXTR_OVERWRITE);
// // extract($color,EXTR_SKIP);

// //this function will skip those index value jiss variable ka value yadi pahle s define hoga to ye unhe hee return karega 
// // extract($color,EXTR_PREFIX_SAME,"test");
// extract($color,EXTR_PREFIX_ALL,"test");



// echo "value of a :$a <br>";//this will print array value at index a instead a is defined earlier that will not affect the array values
// echo "value of a :$test_a <br>";
// //ye jo h wo array value ko hee return karega jiki value yadi pahle s define h frr bhee ye array ki value ko uss particular index waale ko hee return karega 
// echo "value of b :$test_b <br>";//this will print array value at index b
// echo "value of c :$test_c <br>";








//----------------------------------------



//compact function




$firstname = "Divyanshu";
$lastname ="Singh";
$age = 19;
$gender = "male";
$country ="Bharat";
$extra = ["gender","country"];

$newarray = compact("firstname","lastname","age",$extra);
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>
