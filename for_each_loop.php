<?php
// $c = [
//     "red",
//     "blue",
//     "green"
// ];

// foreach($c as $value){
//     echo $value . "<br>";
// }





// use of for each loop in  associative array 



$age = [
    "aman" =>10,
    "shyam" =>100,
    "ram" =>56
];

echo "<ul>";
foreach($age as $key => $value){
    echo "<li>$key = $value </li>";
}
echo "</ul>";


?>