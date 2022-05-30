<?php

// Create simple string
$name = 'Saim';
$age = 23;

$string1 = 'Hello, this is '.$name.' and I am $age years old'; // In single quotation we need to use concatination to access variable.
$string2 = "Hello, this is $name and I am $age years old"; // In double quotation we can use variable directly. Without using concatination.

echo $string1 . '<br>';
echo $string2 . '<br>';

// String concatenation
echo 'Hello '.' World and '.'PHP';
echo '<br>';
echo '<br>';

// String functions
$strings = '   Hello World   ';
echo "1 - strlen - " . strlen($strings) . '<br>' . PHP_EOL;
echo "2 - trim - " . trim($strings) . '<br>' . PHP_EOL;
echo "3 - ltrim - " . ltrim($strings) . '<br>' . PHP_EOL;
echo "4 - rtrim - " . rtrim($strings) . '<br>' . PHP_EOL;
echo "5 - str_word_count - " . str_word_count($strings) . '<br>' . PHP_EOL;
echo "6 - strrev - " . strrev($strings) . '<br>' . PHP_EOL;
echo "7 - strtoupper - " . strtoupper($strings) . '<br>' . PHP_EOL;
echo "8 - strtolower - " . strtolower($strings) . '<br>' . PHP_EOL;
echo "9 - ucfirst - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - lcfirst - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - ucwords - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - strpos - " . strpos($strings, 'World') . '<br>' . PHP_EOL; // search for things by index where they start and its case sensitive.
echo "13 - stripos - " . stripos($strings, 'world') . '<br>' . PHP_EOL; // search for things by index where they start and its ignore case sensitive.
echo "14 - substr - " . substr($strings, 10) . '<br>' . PHP_EOL;
echo "15 - str_replace - " . str_replace('World', 'PHP', $strings) . '<br>' . PHP_EOL; // its case sensitive
echo "16 - str_ireplace - " . str_ireplace('world', 'Saim', $strings) . '<br>' . PHP_EOL; // its ignore case sensitive
echo '<br>';
echo '<br>';

// Multiline text and line breaks

$longText = "
    Hello, my name is SAIM,
    I am a programmer,
    I love my PARENTS.
";

echo $longText.'<br>';
echo nl2br($longText);
echo '<br>';
echo '<br>';


// Multiline text and reserve html tags

$longTextTags = "
    Hello, my name is <b>SAIM</b>,
    I am a <b>programmer</b>,
    I love my <b>PARENTS</b>.
";

echo "1 - " . $longTextTags . '<br>';
echo "2 - nl2br - " . nl2br($longTextTags) . '<br>';
echo "3 - htmlentities - " . htmlentities($longTextTags) . '<br>';
echo "4 - nl2br(htmlentities) - " . nl2br(htmlentities($longTextTags)) . '<br>';
echo "5 - html_entity_decode - " . html_entity_decode('&lt;b&gt;SAIM&lt;/b&gt;') . '<br>';
// https://www.php.net/manual/en/ref.strings.php