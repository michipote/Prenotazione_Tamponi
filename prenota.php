<?php

include_once("config.php");

//Variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$giorno = $_POST['giorno'];

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$codice = generateRandomString();

$query = "SELECT COUNT(*) FROM prenotazione WHERE giorno = $giorno";
$a = $pdo->query($query);
$b = $a->fetchAll();

if($b < 3) {
    $sql = "INSERT INTO prenotazione VALUES(null, :codice_fiscale, :giorno, :codice)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(
        [
            'codice_fiscale' => $codice_fiscale,
            'giorno' => $giorno,
            'codice' => $codice
        ]
    );
    header('location: lista_prenotazioni.php');
    exit(0);
}
else echo "Massimo prenotazioni raggiunto in questa data";