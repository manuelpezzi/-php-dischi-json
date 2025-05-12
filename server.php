<?php
//funzione per leggere i dischi del file JSON

function leggiDischi(){
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
}

//funzione per aggiungere un nuovo disco

function aggiungiDisco($nuovo_disco) {

//leggi i idischi esistenti
$dischi = leggiDischi();
//aggiungi il nuovo disco all'array
$dischi[] = $nuovo_disco;
//codifica l'array in JSON
$json_data = json_encode($dischi);
//salva il JSON nel file
if(file_put_contents('dischi.json',$json_data)===false){
    die('Errore nel salvataggio del file JSON.');
}

} 
//gestione della richiesta

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['titolo'])){
    $nuovo_disco = [
        'titolo' => $_POST['titolo'],
        'artista' => $_POST['artista'],
        'cover' => $_POST['cover'],
        'anno' => $_POST['anno'],
        'genere' => $_POST['genere']
    ];
    //aggiungi il nuovo disco
    aggiungiDisco($nuovo_disco);

    //reinderizza per evitare il reinvio del form
    header('Location : index.php');
    exit;

    ;
}
//ritorna i dischi per la visualizzazione

return leggiDischi();


?>

