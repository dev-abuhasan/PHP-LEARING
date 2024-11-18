<?php
// Comparing integers
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Comparing floats
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// Comparing strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1

// Null coalescing operator
$foo = null;
$bar = "bar";
echo $foo ?? "default"; // "default"
echo $bar ?? "default"; // "bar"

$baz = null;
$qux = null;
echo $baz ?? $qux ?? "default"; // "default"