<?php

function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}


$number = 5;

if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
} else {
    $fact = factorial($number);
    echo "The factorial of $number is $fact";
}
?>
