<?php

$a1 = ["a"=>"red",
"b"=>"green","c"=>"blue","d"=>"yellow"];

$a2 = ["a"=>"red","f"=>"green","d"=>"purple"];
// $newarray = array_intersect($a1,$a2);

//it intersect array by value not by key
// $newarray = array_intersect_key($a1,$a2);
//it intersect array by key

$newarray = array_intersect_assoc($a1,$a2);
//it intersect array by key and value both 

echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
