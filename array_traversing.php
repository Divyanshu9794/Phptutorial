<?php
$food = array('orange',
    'banana',
    'apple',
    'grapes'
);
// echo current($food);
//print the value present at initial index


echo "<b> Current :</b>" . current($food) . "<br>";
echo "<b>Key: </b>" .key($food);

?>