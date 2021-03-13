<?php

include_once("config.php");

//Query di inserimento preparata
$sql = "SELECT * FROM prenotazione";

$stmt = $pdo->query($sql);

//ES: formatta il risultato con HTML
echo "<pre>";
var_dump($stmt->fetchAll());
echo "</pre>";