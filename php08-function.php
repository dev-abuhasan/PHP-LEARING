<?php
// Function with parameter type hinting, default values, and return type declaration
function addNumbers(int $a, int $b = 0): int
{
    return $a + $b;
}

// Function with optional parameter
function greet(string $name = "Guest"): string
{
    return "Hello, $name!";
}   

// Function to accept unlimited arguments
function sumAll(...$numbers): int
{
    return array_sum($numbers);
}

// Recursive function to calculate Fibonacci sequence
function fibonacci(int $n): int
{
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Recursive function to calculate factorial
function factorial(int $n): int
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// Example of variable scope
function variableScopeExample()
{
    $localVar = "I am local";
    echo $localVar . PHP_EOL;
}

$globalVar = "I am global";

function showGlobalVar()
{
    global $globalVar;
    echo $globalVar . PHP_EOL;
}

// Dividing a big function into smaller ones
function processData(array $data): array
{
    $filteredData = filterData($data);
    $sortedData = sortData($filteredData);
    return $sortedData;
}

function filterData(array $data): array
{
    return array_filter($data, function ($item) {
        return $item > 0;
    });
}

function sortData(array $data): array
{
    sort($data);
    return $data;
}

// Test the functions
echo "Add Numbers: " . addNumbers(5, 10) . PHP_EOL;
echo "Greet: " . greet("Abu Hasan") . PHP_EOL;
echo "Sum All: " . sumAll(1, 2, 3, 4, 5) . PHP_EOL;
echo "Fibonacci(10): " . fibonacci(10) . PHP_EOL;
echo "Factorial(5): " . factorial(5) . PHP_EOL;

variableScopeExample();
showGlobalVar();

$data = [3, -1, 2, 0, -5, 4];
print_r(processData($data));
