<?php

$a1 = array("a"=>"red",
"b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"red","f"=>"green","d"=>"purple");

$newarray= array_diff($a1,$a2);
echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
