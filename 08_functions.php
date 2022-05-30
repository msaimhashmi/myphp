<?php

// Function which prints "Hello I am Saim"
function test()
{
	return "Hello I am Saim <br>";
}

echo test();
// Function with argument
function testArg($name)
{
	return "Hello I am ${name} <br>";
}

echo testArg("Muhammad");
echo testArg("Saim");
echo testArg("Hashmi");

// Create sum of two functions
function sumTwo($a, $b)
{
	return $a + $b .'<br>';
}
echo sumTwo(5,6);

// Create function to sum all numbers using ...$nums
function sum(...$num)
{
	$sum = 0;
	foreach ($num as $n) {
		// $sum = $sum + $n;
		$sum += $n;
	}
	echo $sum;
	// echo "<pre>";
	// var_dump($num);
	// echo "</pre>";
}
sum(1,2,3,4,5,6,7);
echo '<br>';

// Arrow functions
// array reduce accept two arguments first is $nums and then second is arrow function.
function arrowSum(...$nums)
{
	return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo arrowSum(1,2,3,4,5,6,7);
