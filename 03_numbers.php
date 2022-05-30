<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.5;
echo '<br>';

// Arithmetic operations (+ - * / %) It use DMAS Rule
//echo ($a + $b) * $c . '<br>';
//echo $a - $b . '<br>';
//echo $a * $b . '<br>';
//echo $a / $b . '<br>';
//echo $a % $b . '<br>';
//echo '<br>';

// Assignment with math operators (=, +=, -=, *=, /=, %=)
// $a = $a + $b is equal to $a += $b

//$a += $b; echo $a . '<br>';
//$a -= $b; echo $a . '<br>';
//$a *= $b; echo $a . '<br>';
//$a /= $b; echo $a . '<br>';
//$a %= $b; echo $a . '<br>';
//echo '<br>';

// Increment operator (var++, ++var)
echo $a++ . ' = '; echo $a . '<br>'; // First value  of $a is take and print then increase by 1
echo ++$a . '<br>'; // First the value of $a is increase then take value of $a and print.
echo '<br>';

// Decrement operator  (var--, --var)
echo $a-- . ' = '; echo $a . '<br>'; // First value of $a is take and print then decrease by 1
echo --$a . '<br>'; // First the value of $a is decrease then take value of $a and print.
echo '<br>';

// Number checking functions
echo is_float(1.25) . '<br>'; // true
echo is_double(1.25) . '<br>'; // true
echo is_int(5) . '<br>'; // true
echo is_integer(5) . '<br>'; // true
echo is_numeric("5.99") . '<br>'; // true
echo is_numeric("5g.99") . '<br>'; // false
echo '<br>';

// Conversion
$strNumber = '99.5';
$numberFloat = (float)$strNumber;
$numberFloatVal = floatval($strNumber);
var_dump($numberFloat) . '<br>';
var_dump($numberFloatVal) . '<br>';

$numberInt = (int)$strNumber;
$numberIntVal = intval($strNumber);
var_dump($numberInt) . '<br>';
var_dump($numberIntVal) . '<br>';
echo '<br>';
echo '<br>';

// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,3) " . pow(2,4) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2,8,7) " . max(2,8,7) . '<br>';
echo "min(2,8,7) " . min(2,8,7) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>'; // floor mean round down
echo "ceil(2.2) " . ceil(2.2) . '<br>'; // Ceil mean round up
echo '<br>';

// Formatting numbers
$number = 123456789.987654321;
echo number_format($number, 2, '.', ',');
echo '<br>';

// https://www.php.net/manual/en/ref.math.php
