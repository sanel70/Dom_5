<?php

$todos_arr = json_decode(file_get_contents('../todo.db'), true);

if (isset($_POST['index']) && is_numeric($_POST['index'])) 
{
    $index = $_POST['index'];
} 
else 
{
    exit("Greska 1 - nepravilan index");
}

unset($todos_arr[$index]);
$todos_arr = array_values($todos_arr);

if (file_put_contents('../todo.db', json_encode($todos_arr))) {
    exit("Uspjesan unos!");
} 
else 
{
    exit("Greska ...");
}
