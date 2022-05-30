<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
	echo "1";
}
echo '<br>';

// Without circle braces
if ($age === 19) echo "without circle braces";
echo '<br>';

// Sample if-else
if ($age > 20) {
	echo "Less then age";
}else{
	echo "Greater then age";
}
echo '<br>';

// Difference between == and === (== check only value. === check value and type both)
if($age == '20')
{
	echo '1';
}
echo '<br>';

if ($age === '20') {
	echo '1';
}
else
{
	echo '0';
}
echo '<br>';

// if AND
if($age > 20 && $salary === 300000)
{
	echo "if AND";
}
echo '<br>';


// if OR
if($age > 20 || $salary === 300000)
{
	echo "if OR".'<br>';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old'; 
echo '<br>';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
// $name = 'Hashmi';
$myName = isset($name)? $name : 'Saim';

$myNameCoalescing = $name ?? 'Saim';

echo $myNameCoalescing;
echo '<br>';

// switch
$userRole = 'admin';

switch($userRole){
	case 'admin':
		echo 'hello admin';
		break;

	case 'user':
		echo 'hello user';
		break;

	case 'manager':
		echo 'hello manager';
		break;

	default :
		echo 'Invalid';
}