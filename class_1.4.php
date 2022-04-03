<?php
$name = 'Earth';
var_dump($name);
echo "\n";
$name = 'Mahfuzur Rahman Sohel';
var_dump($name);
/**
 * variable types in php are:
 * integer - int
 * float / double
 * null
 * string
 * array
 * object
 * boolean
 * resource
 */

 //defference between 'echo', and 'printf()'

 $name = 'Earth';
 $upperCaseName = strtoupper($name);
 echo "We're live in {$upperCaseName} \n";
 printf("We're live in %s \n", strtoupper($name));

$fname = 'Rahman';
$lname = 'Sohel';
printf("My %s name is %s %s %s","full","Mahfuzur",$fname,$lname);