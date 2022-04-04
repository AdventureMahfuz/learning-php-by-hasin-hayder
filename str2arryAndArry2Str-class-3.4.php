<?php
//method one
$string = 'Rahim, Karim, Rakib, Raihan';
$str2arry = explode(', ', $string);
var_dump($str2arry);

$arry2str = join(', ', $str2arry);
echo $arry2str;

echo "\n ============ \n";

//method two
$students = "Shofiq, Shaju,Shakib, Shayan";
$str2arr = preg_split('/, |,/', $students);
var_dump($str2arr);

$arr2str = join(', ', $str2arr);
echo $arr2str;