<?php

// while
// while (true) {
// 	// code...
// }
$counter = 0;
$fruits = ['apple', 'banana', 'orange', 'peach'];

// Loop with $counter
// while ($counter < 10) {
//     echo "The count is = ";
//  //    if ($counter ===  5) {
// 	// 	break;
// 	// }
//     echo $counter++;
//     echo "<br>"; 
// }


// Iterating arrays in PHP using while loop.
$count = 0;
while ($count < count($fruits)) {
    echo "WHILE LOOP: The fruit name is = ";
    echo $fruits[$count];
    $count++;
    echo "<br>";
}


// do - while (Difference b/w while and do while is (Do while execute first attration at any cost. Whereas while loop not))

// $counter = 200;
// do while = Pehle karo phr chalo.
// do{
// 	echo $counter.'<br>';
// 	$counter++;
// }while ($counter < 10);

// for
for ($i=0; $i < 10; $i++) { 
	echo $i.'<br>';
}

// foreach


foreach ($fruits as $fruit) {
	echo $fruit.'<br>';
}

foreach ($fruits as $key => $value) {
	echo $key. ' = ' .$value .'<br>';
}


// Iterate Over associative array.

$person = [
	'name' => 'Saim',
	'surname' => 'Hashmi',
	'age' => 23,
	'hobby' => ['games', 'travel', 'code']
];

foreach ($person as $key => $value) {
	if(is_array($value)){
		echo $key. ' = ' .implode(",", $value) .'<br>';
	}
	else{
		echo $key. ' = ' .$value .'<br>';
	}
}