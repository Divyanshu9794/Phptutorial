<?php
$emp = [
    [1,"aman","manager",50000],
    [2,"amir","CO",5000],
    [3,"salman","PO",150000],
    [4,"sahrukh","driver",500]

];

//Using for each loop

echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>
    <th>Employee id</th>
    <th>Employee Name</th>
    <th>Employee Designation</th>
    <th>Employee Salary</th>
    </tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2  </td>";
    }
    echo "</tr>";
}
echo "</table>";


// for($row=0;$row<4;$row++){
//     for($col=0;$col<4;$col++){
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }




// echo $emp[0][0] . " ";
// echo $emp[0][1] . " ";
// echo $emp[0][2] . " ";
// echo $emp[0][3] . " ";
// echo "<br>";
// echo $emp[1][0] . " ";
// echo $emp[1][1] . " ";
// echo $emp[1][2] . " ";
// echo $emp[1][3] . " ";

// echo "<pre>";
// print_r($emp);

// echo "</pre>";



?>
