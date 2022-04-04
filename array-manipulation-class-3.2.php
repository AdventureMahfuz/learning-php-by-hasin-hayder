<?php
$students = array(
    "Rahmin",
    "Karim",
    "Rafi",
    "Rafsan",
    123,
    "Mozammel"
    );

//replace in array
$students[4] = "Shofiq";
var_dump($students);

echo "\n remove first element from array \n";
//remove first element form arrary
array_shift($students);
var_dump($students);

echo "\n remove last element from array \n";
//remove last element form arrary
array_pop($students);
var_dump($students);

echo "\n add element into first position in array \n";
//add element into first position in array
array_unshift($students, 'Sohel');
var_dump($students);

echo "\n add element into last position in array \n";
//add element into last position in array
//method 1
array_push($students, 'Rana');
//method 2
$students[] = 'Abdul Aziz';
var_dump($students);
