<?php

// function display($number){
//     if($number<=5){
//         echo "$number <br>";
//         display($number + 1);
//     }
// }
// display(-100);
 function factorial($number){

    if($number==0){
        return 1;
    }
    else{
        return ($number * factorial($number-1));
    }
 }
 echo factorial(5);



?>
