<?php
$percentage =155;

if($percentage>=80 && $percentage<=100){
    echo "You are in merit";
}

elseif($percentage>=60 && $percentage<80){
    echo "You are in 1st division";
}

elseif($percentage>=45 && $percentage<60){
    echo "You are in 2nd division";
}

elseif($percentage>=33 && $percentage<45){
    echo "You are in 3rd divison";
}
elseif($percentage<30){
    echo "You are fail";
}
else{
    echo " Enter the valid percentage";
}
?>