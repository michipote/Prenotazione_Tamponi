<?php

include_once("config.php");

//Variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$giorno = $_POST['giorno'];

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$codice = generateRandomString();

//Query di inserimento preparata
$sql = "INSERT INTO prenotazione VALUES(null, :codice_fiscale, :giorno, :codice)";

//Inviamo la query al database che la tiene in pancia
$stmt = $pdo->prepare($sql);

//Inviamo i dati conreti che verranno messi al posto dei segnaposto
$stmt->execute(
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $giorno,
        'codice' => $codice
    ]
);

//Ridirige il browser verso la pagina indicata nella location
header('location: lista_prenotazioni.php');
exit(0);