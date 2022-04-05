<?php
$student = [
    "fname" => "Sohel",
    "lname" => "Rana",
    "roll" => 3301,
    "class" => 10
];
print_r($student);

//serialize
$s = serialize($student);
echo $s . "\n\n";
//unserialize
$us = unserialize($s);
print_r($us);

//json encode
$jsonEncode = json_encode($student);
echo $jsonEncode . "\n\n";
//json decode
$jsonDecode = json_decode($jsonEncode);
$jsonDecode2 = json_decode($jsonEncode, true);
print_r($jsonDecode);
echo "\n\n";
print_r($jsonDecode2);