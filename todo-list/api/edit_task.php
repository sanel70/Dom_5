<?php

$todos_arr = json_decode(file_get_contents('../todo.db'), true);

if (isset($_POST['index']) && is_numeric($_POST['index'])) {
    $index = $_POST['index'];
} else {
    exit("Greska 1 - nepravilan index");
}
if (isset($_POST['tekst']) && $_POST['tekst'] !== "") {
    $tekst = $_POST['tekst'];
} else {
    exit("Greska 2 - unesi tekst");
}
if (isset($_POST['opis']) && $_POST['opis'] !== "") {
    $opis = $_POST['opis'];
} else {
    exit("Greska 3 - unesi opis");
}

$todos_arr[$index]['tekst'] = $tekst;
$todos_arr[$index]['opis'] = $opis;

if (file_put_contents('../todo.db', json_encode($todos_arr))) {
    exit("Uspjesna izmjena!");
} else {
    exit("Greska ...");
}

?>