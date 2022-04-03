<?php
function numberPrint($i){
    if($i > 10){
        return;
    }
    echo $i . "\n";
    $i++;
    numberPrint($i);
}

echo numberPrint(0);
echo "===================== \n";

function factorial($n){
    if($n < 1){
        return 1;
    }
    return $n * factorial($n - 1);
}
echo factorial(3);