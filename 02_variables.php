<?php

// What is a variable
// In any programming language. Variable is just a container that store values.

// Variable/Data types
/*
    1.String
    2.Integer
    3.Float/Double
    4.Boolean
    5.Null
    6.Array
    7.Object
    8.Resource
 */

// Declare variables
    $name  = 'Saim';
    $age = 22;
    $height = 5.80;
    $isMale = true;
    $salary = Null;

// Print the variables. Explain what is concatenation
    echo $name.'<br>';
    echo $age.'<br>';
    echo $height.'<br>';
    echo $isMale.'<br>'; // whenever we try to access boolean then it covert into string and show 1 instead of true and null instead of false.
    echo $salary.'<br>';
    echo '<br>';

// Print types of the variables
    echo gettype($name).'<br>';
    echo gettype($age).'<br>';
    echo gettype($height).'<br>';
    echo gettype($isMale).'<br>';
    echo gettype($salary).'<br>';
    echo '<br>';

// Print the whole variable
    echo var_dump($name, $age, $height, $isMale, $salary);
    echo '<br>';
    echo '<br>';

// Change the value of the variable
    $name = 'Hashmi';

// Print type of the variable
    echo $name;
    echo '<br>';
    echo '<br>';

// Variable checking functions
    echo is_string($name); // true
    echo '<br>';
    echo is_int($age); // true
    echo '<br>';
    echo is_float($height); // true
    echo '<br>';
    echo is_bool($isMale); // true
    echo '<br>';
    echo is_null($salary); // true
    echo '<br>';
    echo '<br>';

// Check if variable is defined
    echo isset($name); // If variable defined then it would give TRUE
    echo '<br>';
    echo isset($address); // If variable not defined then it would give FALSE
    echo '<br>';
    echo '<br>';

// Constants
    define('PI', 3.14);
    echo PI;
    echo '<br>';
    echo '<br>';

// Using PHP built-in constants
    echo SORT_ASC.'<br>';
    echo PHP_INT_MAX.'<br>';