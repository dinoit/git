<?php 
    $url = 'https://jsonplaceholder.typicode.com/todos/1'; // path to your JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    echo $data;

?>

