<?php

$marks =[
    "krishna" =>[
        "physics" =>84,
        "maths" => 78,
        "chemistry" =>94
    ],
    "Salman" =>[
        "physics" =>64,
        "maths" => 70,
        "chemistry" =>84
    ],
    "Mohan" =>[
        "physics" =>74,
        "maths" => 79,
        "chemistry" =>94
    ]
    ];

echo "<table border='2px' cellpadding='5px'>
    <tr>
        <th> Student name </th>
        <th> Physics </th>
        <th> Maths </th>
        <th> Chemistry </th>
    </tr>";
foreach($marks as $key => $v1){
    echo "<tr>
        <td>$key</td>" ;
        foreach($v1 as $v2){
            echo "<td>$v2 </td>";
        }
    echo "</tr>";
}
echo "</table>";






    // echo "<pre>";
//     print_r($marks);

// echo "</pre>"







?>