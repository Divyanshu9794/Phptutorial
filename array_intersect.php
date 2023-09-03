<?php

function compare($a,$b){
    if($a===$b){
        return 0;
    }
    return ($a>$b)?1:-1;
}
$a1 = ["a"=>"red",
"b"=>"green","c"=>"blue","d"=>"yellow"];

$a2 = ["a"=>"red","f"=>"green","d"=>"purple"];
// $newarray = array_intersect($a1,$a2);

//it intersect array by value not by key
// $newarray = array_intersect_key($a1,$a2);
//it intersect array by key

// $newarray = array_intersect_assoc($a1,$a2);
//it intersect array by key and value both 
// $newarray = array_intersect_uassoc($a1,$a2,"compare");
// this function will take an additional parameter i.e, a user defined function
// $newarray = array_uintersect_assoc($a1,$a2,"compare");
$newarray = array_intersect_ukey($a1,$a2,"compare");


echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
