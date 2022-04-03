<?php
$conditon1 = false;
$conditon2 = false;
$conditon3 = false;

if($conditon1){
    if($conditon2){
        if($conditon3){
            echo 'Hello';
        }else{
            echo 'No 1';
        }
    }else{
        echo 'No 2';
    }
}else{
    echo 'No 3';
}

echo "\n";

if($conditon1 && $conditon2 && $conditon3){
    echo 'Hello';
}elseif($conditon1 && $conditon2){
    echo 'No 1';
}elseif($conditon1){
    echo "No 2";
}else{
    echo "No 3";
}