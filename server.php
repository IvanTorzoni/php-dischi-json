<?php
// Prendo il contenuto dal file json
$list_dischi_json = file_get_contents("dischi.json");

// Converto il contenuto per creare successivamente un array associativo
$list_php = json_decode($list_dischi_json, true);

// Creo un array associativo
$array = [
    "results" => $list_php
];

// Trasformo in stringa json
$json_string = json_encode($array);

// Passo il contenuto a javascript
header("Content-Type: application/json");

// Output
echo $json_string;
?>
