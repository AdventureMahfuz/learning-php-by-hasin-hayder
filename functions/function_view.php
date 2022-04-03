<?php
include_once "functions.php";

// even or odd
$x = 12;
if(isEven($x)){
    echo "The mumber {$x} is even";
}else{
    echo "The mumber {$x} is odd";
}
echo "\n";


//factorial
$x = 3;
echo "factorial of {$x} is ". factorialOf($x);

echo "\n";

//function defult value test
echo served('salad', '2 plate');

echo "\n";

//fixed return type
echo "Add result is " . sum(2,2,2);
echo "\n";
//unlimited parameter
echo additon(2,3,6,5,6,3,8);

//recursive function
print1To10(1);
