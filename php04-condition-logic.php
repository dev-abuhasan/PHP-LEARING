<?php
// If statement
$age = 20;
if ($age >= 18) {
    echo "You are an adult.";
}

// If-else statement
$score = 75;
if ($score >= 50) {
    echo "You passed the exam.";
} else {
    echo "You failed the exam.";
}

// If-elseif-else statement
$day = "Monday";
if ($day == "Monday") {
    echo "Today is Monday.";
} elseif ($day == "Tuesday") {
    echo "Today is Tuesday.";
} else {
    echo "Today is not Monday or Tuesday.";
}

// Switch statement
$color = "red";
switch ($color) {
    case "red":
        echo "The color is red.";
        break;
    case "blue":
        echo "The color is blue.";
        break;
    default:
        echo "The color is not red or blue.";
        break;
}

// Ternary operator
$is_logged_in = true;
$message = $is_logged_in ? "Welcome back!" : "Please log in.";
echo $message;

// Null coalescing operator
$username = $_GET['username'] ?? 'Guest';
echo "Hello, " . $username;

// Logical AND
$a = true;
$b = false;
if ($a && $b) {
    echo "Both are true.";
} else {
    echo "At least one is false.";
}

// Logical OR
$a = true;
$b = false;
if ($a || $b) {
    echo "At least one is true.";
} else {
    echo "Both are false.";
}

// Logical NOT
$a = true;
if (!$a) {
    echo "a is false.";
} else {
    echo "a is true.";
}

// Logical XOR
$a = true;
$b = false;
if ($a xor $b) {
    echo "One is true and one is false.";
} else {
    echo "Both are true or both are false.";
}

// Comparison operators
$n = 13;
if ($n % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}

// If-else statement for leap year
$year = 2024;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}

// Nested if-else statement
$score = 85;
if ($score >= 90) {
    echo "Grade: A";
} else {
    if ($score >= 80) {
        echo "Grade: B";
    } else {
        if ($score >= 70) {
            echo "Grade: C";
        } else {
            if ($score >= 60) {
                echo "Grade: D";
            } else {
                echo "Grade: F";
            }
        }
    }
}

// Nested ternary operator
$age = 25;
$status = ($age < 13) ? "Child" : (($age < 20) ? "Teenager" : "Adult");
echo "You are an " . $status . ".";


// Switch statement with string functions
$string = "hello world";
switch (true) {
    case ctype_upper($string):
        echo "The string is in uppercase.";
        break;
    case ctype_lower($string):
        echo "The string is in lowercase.";
        break;
    case ucfirst($string) == $string:
        echo "The string starts with an uppercase letter.";
        break;
    case ucwords($string) == $string:
        echo "The string is in title case.";
        break;
    default:
        echo "The string is in mixed case.";
        break;
}


// Nested switch case
$fruit = "apple";
$color = "red";

switch ($fruit) {
    case "apple":
        switch ($color) {
            case "red":
                echo "The apple is red.";
                break;
            case "green":
                echo "The apple is green.";
                break;
            default:
                echo "The apple is neither red nor green.";
                break;
        }
        break;
    case "banana":
        switch ($color) {
            case "yellow":
                echo "The banana is yellow.";
                break;
            case "green":
                echo "The banana is green.";
                break;
            default:
                echo "The banana is neither yellow nor green.";
                break;
        }
        break;
    default:
        echo "The fruit is neither apple nor banana.";
        break;
}
