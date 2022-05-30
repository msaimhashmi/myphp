<?php
// Magic constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';



echo __LINE__.'<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'testing');

// Delete directory
// rmdir('testing');

// Read files and folders inside directory
// $scandir = scandir('./'); // ./ use for current directory
$scandir = scandir('../'); // ../ use for parent directory
echo '<pre>';
var_dump($scandir);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');

file_put_contents('sample.txt', 'some code'); 	

// file_get_contents from URL
$jsonData = file_get_contents('https://jsonplaceholder.typicode.com/posts');
echo $jsonData;

$users = json_decode($jsonData, false);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file