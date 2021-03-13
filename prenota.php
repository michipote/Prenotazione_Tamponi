<?php

include_once("config.php");

//Variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$data_ora = $_POST['giorno'];

//Query di inserimento preparata
$sql = "INSERT INTO prenotazione VALUES(null, :codice_fiscale, :giorno)";

//Inviamo la query al database che la tiene in pancia
$stmt = $pdo->prepare($sql);

//Inviamo i dati conreti che verranno messi al posto dei segnaposto
$stmt->execute(
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $data_ora
    ]
);

//Ridirige il browser verso la pagina indicata nella location
header('location: lista_prenotazioni.php');
exit(0);