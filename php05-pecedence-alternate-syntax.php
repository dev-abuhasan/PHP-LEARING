<?php
echo "This is the first line of code.\n";
echo "This is the second line of code.\n";
echo "This is the third line of code.\n";


$f = false || true;
$e = false or true;
var_dump($f, $e);

echo "For more information on operator precedence, visit: https://www.php.net/manual/en/language.operators.precedence.php";

    $a = true && false;
    $b = true and false;
    $c = false || true;
    $d = false or true;
    $e = true xor false;
    $f = !true;

    var_dump($a, $b, $c, $d, $e, $f);



    if ($a):
        echo "a is true\n";
    else:
        echo "a is false\n";
    endif;

    while ($c):
        echo "c is true\n";
        $c = false;
    endwhile;

    for ($i = 0; $i < 3; $i++):
        echo "i is $i\n";
    endfor;

    switch ($d):
        case true:
            echo "d is true\n";
            break;
        case false:
            echo "d is false\n";
            break;
    endswitch;