<?php

include_once("config.php");

//Query di inserimento preparata
$sql = "SELECT * FROM prenotazione";

$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();

echo "<pre>";
var_dump($stmt);
echo "</pre>";