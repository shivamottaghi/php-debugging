<?php
declare(strict_types=1);


echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}


new_exercise(2);

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise(3);

$str = "\"Debugged !\" Also very fun";
echo substr($str, 0, 12);




new_exercise(4);
