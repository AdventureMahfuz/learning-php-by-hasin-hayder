<?php
$person = ['1' => 'Rahim', '2' => 'Karim', '3' => 'Rafiq', '4' => 'Raihan'];
//deep copy
// or copy by value
$newPerson = $person;
$newPerson[1] = 'Rakib';
print_r($person);
print_r($newPerson);

$student = [
    'fname' => 'Sohel',
    'lname' => 'Rana'
];

//shallow copy
//or referance copy
$newStudent = &$student;
$newStudent['lname'] = "pramanik";
print_r($student);
print_r($newStudent);

