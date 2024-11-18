<?php
// Addition
$sum = 5 + 3;
echo "5 + 3 = " . $sum . "\n";

// Subtraction
$difference = 10 - 4;
echo "10 - 4 = " . $difference . "\n";

// Multiplication
$product = 7 * 6;
echo "7 * 6 = " . $product . "\n";

// Division
$quotient = 20 / 4;
echo "20 / 4 = " . $quotient . "\n";

// Modulus
$remainder = 15 % 4;
echo "15 % 4 = " . $remainder . "\n";

// Exponentiation
$power = 3 ** 4;
echo "3 ^ 4 = " . $power . "\n";

// Increment
$increment = 5;
$increment++;
echo "Increment 5: " . $increment . "\n";

// Decrement
$decrement = 5;
$decrement--;
echo "Decrement 5: " . $decrement . "\n";

// Absolute value
$absolute = abs(-10);
echo "Absolute value of -10: " . $absolute . "\n";

// Square root
$squareRoot = sqrt(16);
echo "Square root of 16: " . $squareRoot . "\n";

// Rounding
$round = round(3.6);
echo "Round 3.6: " . $round . "\n";

// Ceiling
$ceil = ceil(3.3);
echo "Ceiling of 3.3: " . $ceil . "\n";

// Floor
$floor = floor(3.7);
echo "Floor of 3.7: " . $floor . "\n";

// Random number
$random = rand(1, 10);
echo "Random number between 1 and 10: " . $random . "\n";
// Addition assignment
$addAssign = 10;
$addAssign += 5;
echo "10 += 5: " . $addAssign . "\n";

// Subtraction assignment
$subAssign = 10;
$subAssign -= 3;
echo "10 -= 3: " . $subAssign . "\n";

// Multiplication assignment
$mulAssign = 10;
$mulAssign *= 2;
echo "10 *= 2: " . $mulAssign . "\n";

// Division assignment
$divAssign = 10;
$divAssign /= 2;
echo "10 /= 2: " . $divAssign . "\n";

// Modulus assignment
$modAssign = 10;
$modAssign %= 3;
echo "10 %= 3: " . $modAssign . "\n";

// Percentage
$percentage = (50 / 100) * 200;
echo "50% of 200: " . $percentage . "\n";

// Power of 2
$powerOfTwo = pow(2, 3);
echo "2^3 using pow function: " . $powerOfTwo . "\n";

// Logarithm
$logarithm = log(8, 2);
echo "Log base 2 of 8: " . $logarithm . "\n";

// Sine
$sine = sin(deg2rad(30));
echo "Sine of 30 degrees: " . $sine . "\n";

// Cosine
$cosine = cos(deg2rad(60));
echo "Cosine of 60 degrees: " . $cosine . "\n";

// Tangent
$tangent = tan(deg2rad(45));
echo "Tangent of 45 degrees: " . $tangent . "\n";

// Pre-increment
$n = 7;
$m = $n++;
echo $m, "\n", $n, "\n";

// Printf with different number formats
$number = 255;
printf("Decimal: %d, Binary: %b, Octal: %o, Hexadecimal: %x, Hexadecimal (uppercase): %X\n", $number, $number, $number, $number, $number);