<?php
// while loop
$i = 0;
while ($i < 5) {
    echo "The value of i is: $i\n";
    $i++;
}

// do-while loop
$j = 0;
do {
    echo "The value of j is: $j\n";
    $j++;
} while ($j < 5);

// for loop
for ($k = 0; $k < 5; $k++) {
    echo "The value of k is: $k\n";
}

// foreach loop
$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
    echo "The value is: $value\n";
}

for($i = 10; $i > 0; $i--) {
    echo "The value of i is: $i\n";
}

// for loop with multiple stepping variables
for ($m = 0, $n = 10; $m < 5 && $n > 5; $m++, $n--) {
    echo "The value of m is: $m and the value of n is: $n\n";
}

// for loop to calculate factorial of a number
$number = 5;
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "The factorial of $number is: $factorial\n";


// for loop to calculate factorial of a number using a function
function factorial($number)
{
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo "The factorial of 5 is: " . factorial(6) . "\n";

// Fibonacci series using a for loop
$first = 0;
$second = 1;
$limit = 10;

echo "Fibonacci series up to $limit terms:\n";
for ($i = 0; $i < $limit; $i++) {
    echo $first . "\n";
    $next = $first + $second;
    $first = $second;
    $second = $next;
}