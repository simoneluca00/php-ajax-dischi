<?php

    include __DIR__ . '/database.php';

    // Array vuoto contenente i risultati del filtraggio
    $filteredAlbums = [];

    // se nessuna opzione della select è selezionata (quindi nell'URI il parametro "genre" è vuoto)
    if ( !empty( $_GET['genre'] ) ) {
        foreach ($database as  $element) {

            // gli album che presentano il genere selezionato vengono pushati nell'array vuoto inizializzato
            if ( $element['genre'] === $_GET['genre'] ) {
                $filteredAlbums[] = $element;
            }
        }
    } else {
        // se nessun genere viene selezionato l'array che era vuoto diventerà identico a quello iniziale (database)
        $filteredAlbums = $database;
    }

    
    // trasformare l'array in un Json
    header("Content-Type: application/json");

    echo json_encode($filteredAlbums);
?>