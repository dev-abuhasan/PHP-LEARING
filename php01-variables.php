<?php
$txt = "PHP";
printf("I love %s!\n", $txt);

printf("%s\n", phpversion());

$age = 16;
$word = "age";
$name = "Abu Hasan";

printf("Hello %s\n", $name);
printf("Hello %s, %s\n", $name, $txt);
printf("Hello %s, %s\n", $name, $txt);

$name = "Salma Khatun";
printf("%s\n", $name);

define('PI', 3.141516); // Fixed PI value
printf("PI = %s\n", PI);
printf("%s\n", constant('PI'));
printf("Val PI = %s\n", constant('PI')); // Correct usage
// Adding a new constant
define('GRAVITY', 9.8);
printf("Gravity = %s\n", GRAVITY);

// Using a variable variable
$$word = 25;
printf("Age: %s\n", $age);

// Using a function
function greet($name)
{
    return "Hello, " . $name . "!";
}
printf("%s\n", greet($name));

// Using an array
$fruits = array("Apple", "Banana", "Cherry");
printf("I like %s, %s and %s.\n", $fruits[0], $fruits[1], $fruits[2]);

// Using print
print "This is printed using print\n";

// Using printf
printf("This is printed using printf: %s\n", $txt);

// Using sprintf
$formattedString = sprintf("This is formatted using sprintf: %s\n", $txt);
echo $formattedString;

// Using var_dump
var_dump("This is dumped using var_dump");
var_dump($age);
var_dump($name);
var_dump(PI);

$number = 123;
$float = 123.456;
$hex = 0x1A;
$octal = 0123;

printf("Integer: %d\n", $number);
printf("Float: %.2f\n", $float);
printf("Hexadecimal: %X\n", $hex);
printf("Octal: %o\n", $octal);
printf("String: %s\n", $txt);
printf("Character: %c\n", 65); // ASCII value of 'A'
printf("Scientific notation: %e\n", $float);
printf("Binary: %b\n", $number);


$unsignedInt = 4294967295;
$float = 123.456;
$hex = 0x1A;
$octal = 0123;
$string = "Hello, World!";
$char = 65; // ASCII value of 'A'

printf("Unsigned integer: %u\n", $unsignedInt);
printf("Shorter of %%e and %%f: %g\n", $float);
printf("Shorter of %%E and %%F: %G\n", $float);
printf("Floating-point (not locale-aware): %F\n", $float);
printf("Hexadecimal (lowercase): %x\n", $hex);
printf("Hexadecimal (uppercase): %X\n", $hex);
printf("String: %s\n", $string);
printf("Character: %c\n", $char);