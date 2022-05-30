<?php

// // Create array
// $fruits = ["Apple", "Banana", "Orange"];

// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Get element by index
// echo $fruits[0].'<br>';

// // Set element by index
// $fruits[2] = 'Peach';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Check if array has element at index 2
// echo isset($fruits[2]); // if array has an element then return 1(true) otherwise return empty(false)


// // Append element
// $fruits[] = "Mango";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Print the length of the array
// echo count($fruits).'<br>';


// // Add element at the end of the array
// array_push($fruits, 'Grapes');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the end of the array
// echo array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Add element at the beginning of the array
// array_unshift($fruits, 'first-fruit');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the beginning of the array
// echo array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Split the string into an array
// $string = 'Toyota,Honda,BMW,KIA';
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';

// // Combine array elements into string
// echo implode("-", $fruits);

// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('Apple', $fruits));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('Mango', $fruits)); //If index not exists it return false.
// echo '</pre>';

// // Merge two arrays
// $vegetables = ["Potato", "Tomato"];
// $cars = "civic, corolla";
// echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
// var_dump([...$fruits, ...$vegetables]); // This new notation are (spread operators). PHP 7.4 introduced the spread operator to the array expression. PHP uses the three dots (...) to denote the spread operator. 

// // Why we use spread operator?
// // The spread operator offers better performance than the array_merge() function because it is a language construct whereas the array_merge() is a function call. Also, PHP optimizes the performance for constant arrays at compile time.

// echo '</pre>';

// // Sorting of array (Reverse order also)

// sort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// rsort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array (Key value pairs)

$person = [
	'name' => 'Saim',
	'surname' => 'Hashmi',
	'age' => 23,
	'hobby' => ['games', 'travel', 'code']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'];

// Set element by key
$person['channel'] = 'MuhammadSaim';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address']))
// {
// 	$person['address'] = 'unknown';
// }
$person['address'] ??= 'unknown'; // ?? introduced in PHP 7.4. ?? to check the value is set or not.
echo '<pre>';
var_dump($person);
echo '</pre>';


// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
// sort by key
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// sort by value
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';


// Two dimensional arrays
$array = [
	['name' => 'saim', 'surname' => 'hashmi'],
	['name' => 'mannu', 'surname' => 'aleem'],
];
echo '<pre>';
var_dump($array);
echo '</pre>';
