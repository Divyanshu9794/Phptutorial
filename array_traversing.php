<?php
$food = array('orange',
    'banana',
    'apple',
    'grapes'
);
// echo current($food);
//print the value present at initial index


// echo "<b> Current :</b>" . current($food) . "<br>";
// echo "<b>Key: </b>" .key($food);


// echo "<b> Current :</b>" . current($food) . "<br>";
// echo "<b>Key: </b>" .key($food) . "<br>";
// echo "<b>Pos: </b>" .pos($food);
//return the value of the element which is at current position

next($food);
//move the pointer from current element to the next element
// echo "<b> Current :</b>" . current($food) . "<br>";

// prev($food);
// //return the previous index element
// echo "<b> Current :</b>" . current($food) . "<br>";

end($food);
//return the previous index element
echo "<b> Current :</b>" . current($food) . "<br>";
prev($food);
//return the previous index element
echo "<b> Current :</b>" . key($food) . "<br>";


?>