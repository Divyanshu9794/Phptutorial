<?php
// function hello($name="Aman",$relation="Bhai"){
//     $v = "$name $relation";
//     return $v;
// }
// echo hello("divyanshu");
// $n = hello("Shiv");
// echo $n;


function sum($maths, $eng,$scie)
{
    $v = $maths + $scie + $eng;
    return $v;
}

$total =  sum(86,65,78);
function percentage($st){
    $per = $st/3;
    echo $per . "%";

}
percentage($total);

?>