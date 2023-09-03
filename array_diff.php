<?php

$a1 = array("a"=>"red",
"b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"red","f"=>"green","d"=>"purple");

// $newarray= array_diff($a1,$a2);
//it will take difference of only values and return the array elements which are not common in both the array


// $newarray= array_diff_key($a1,$a2);
//it will take difference of only keys  and return the array elements which are not common in both the array
// $newarray= array_diff_assoc($a1,$a2);
//array diff function is case sensitive it will treat two keys different if one is in capital and other is smaalll
$newarray= array_diff_uassoc($a1,$a2);



echo "<pre>";
print_r($newarray);
echo "</pre>";

?>
