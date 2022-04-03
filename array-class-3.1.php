<?php
$students = array(
    "Sohel",
    "Rakib",
    "Raihan",
    123,
    "Shakib"
);
var_dump($students);
echo count($students). "\n\n";
echo $students[0]. "\n\n";

$arrayCount = count($students);
for($i = 0; $i < $arrayCount; $i++){
    echo $students[$i]. "\n";
}
echo "\n";
$employs = [
    "Sohel",
    "Rakib",
    "Raihan",
    "Shakib"
];

echo $employs[1];