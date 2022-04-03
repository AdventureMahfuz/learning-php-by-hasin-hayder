<?php
$fName = 'Mahfuzur';
$middleName = 'Rahman';
$lName = 'Sohel';
printf('My nick name is %3$s and full name is %1$s %2$s',$fName,$middleName,$lName);

echo "\n";

printf('The binary equvalent of %1$d is %1$b', 12);

echo "\n";

$n = 45.126;
$n2 = 45.125;
printf('%.2f and %.2f', $n, $n2);

echo "\n";

$x = 234;
$y = 34;
printf('%04d' . "\n". '%04d', $x, $y);

echo "\n";

$x = 234.54412;
$y = 34.54856;
printf('%07.2f' . "\n". '%07.2f', $x, $y);