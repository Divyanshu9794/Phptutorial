<?php


$emp = [
    [1,"aman","manager",50000],
    [2,"amir","CO",5000],
    [3,"salman","PO",150000],
    [4,"sahrukh","driver",500]

];

echo "<table border='2px' cellspacing='0px' cellpadding='5px'>
    <tr>
        <th> Employee ID</th>
        <th> Name</th>
        <th> Designation</th>
        <th> Salary</th>

    </tr>


";

foreach($emp as list($id,$name,$designation,$salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
echo "</table>";





?>
