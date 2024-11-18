<?php
// printf examples
printf("Integer: %d\n", 42);
printf("Floating point number: %.2f\n", 3.14159);
printf("String: %s\n", "Hello, World!");
printf("Character: %c\n", 65);
printf("Hexadecimal: %x\n", 255);
printf("Octal: %o\n", 255);
printf("Binary: %b\n", 255);

// sprintf examples
$integer = sprintf("Integer: %d", 42);
$floatingPoint = sprintf("Floating point number: %.2f", 3.14159);
$string = sprintf("String: %s", "Hello, World!");
$character = sprintf("Character: %c", 65);
$hexadecimal = sprintf("Hexadecimal: %x", 255);
$octal = sprintf("Octal: %o", 255);
$binary = sprintf("Binary: %b", 255);

echo $integer . "\n";
echo $floatingPoint . "\n";
echo $string . "\n";
echo $character . "\n";
echo $hexadecimal . "\n";
echo $octal . "\n";
echo $binary . "\n";

// printf with argument positions
printf("Integer: %1\$d, Floating point number: %2\$.2f, String: %3\$s\n", 42, 3.14159, "Hello, World!");
printf("Character: %1\$c, Hexadecimal: %2\$x, Octal: %3\$o, Binary: %4\$b\n", 65, 255, 255, 255);

// sprintf with argument positions
$combined = sprintf("Integer: %1\$d, Floating point number: %2\$.2f, String: %3\$s", 42, 3.14159, "Hello, World!");
echo $combined . "\n";

printf("%.2f: %08.5f\n", 3.14159, 133.1415);
