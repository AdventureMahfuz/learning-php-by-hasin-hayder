<?php
$students = [
    '1' => 'Sohel',
    '5' => 'Rana',
    '10' => 'Rakib'
];

var_dump($students);
echo $students[10];

echo "\n =================== \n";

$assets = [
    'Rakib' => 'laptop, desktop, home, money,',
    'Rahim' => 'bike, smart phone, smart watch',
    'Raihan' => 'book, pen, watch',
];
echo $assets['Rakib'];
foreach($assets as $key => $value){
    echo $key . '=' . $value . "\n";
}