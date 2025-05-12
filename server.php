<?php
// Legge il contenuto del file JSON
$json_data = file_get_contents('dischi.json');

// Decodifica il JSON in un array PHP
$dischi = json_decode($json_data, true);

// Verifica se il JSON è stato decodificato correttamente
if ($dischi === null) {
    die('Errore nella lettura del file JSON.');
}

// Ritorna l'array dei dischi
return $dischi;
?>

