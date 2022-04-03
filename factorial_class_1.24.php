<?php
$n = 3;

for($i = $n, $factorial = 1; $i > 0; $i--){
    $factorial = $factorial * $i;
}
printf("factorial of %d is %d",$n, $factorial );