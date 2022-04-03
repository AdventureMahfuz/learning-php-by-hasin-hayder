<?php
// check even or odd
function isEven($n){
    if(($n % 2) == 0){
        return true;
    }
    return false;
}

//factorial calculation
function factorialOf($n){
    if(gettype($n) != 'integer'){
        return 'Provide number not string';
    }else{
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    }
}

//defult valu in function
function served($foodName = 'coffe', $numOfItem = "2 cups"){
    return "{$numOfItem} of {$foodName} has/have been served";
}

//specific parametar and specific return type
function sum(int $x, int $y, int $z):int {
    return $x+$y+$z;
}

//unlimited parameter
function additon(int ...$numbers):int {
    $result = 0;
    for($i = 0; $i < count($numbers); $i++){
      $result += $numbers[$i];
    }
    return $result;
}

//recursive function
function print1To10($i){
    if($i > 10){
        return;
    }
    echo $i . "\n";
    $i++;
    print1To10($i);
}