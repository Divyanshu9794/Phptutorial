<?php

$a1 = ["a"=>"red",
"b"=>"green","c"=>"blue","d"=>"yellow"];

$a2 = ["a"=>"red","f"=>"green","d"=>"purple"];
$newarray = array_intersect($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
