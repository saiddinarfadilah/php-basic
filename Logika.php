<?php
$a = true;
$b = false;

// operator and (&&) (kedua kondisi harus true)
$and = $a && $b;

printf("%b && %b = %b", $a, $b, $and);
echo "<hr>";

// operator or (||) (salah satu kondisi harus true)
$or = $a || $b;

printf("%b || %b = %b", $a, $b, $or);
echo "<hr>";

// operator not (!) (kebalikan)
$not = !$a;

printf("!%b = %b", $a, $not);
echo "<hr>";
