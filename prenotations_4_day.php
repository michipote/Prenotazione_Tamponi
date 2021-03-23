<?php

require 'vendor/autoload.php';
include_once("config.php");

use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');

//Query di inserimento preparata
$sql = "SELECT giorno, COUNT(*) as n_prenotazioni FROM prenotazione GROUP BY giorno";

$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();

//Rendo un template che mi visualizza una tabella
echo $templates->render('prenotazioni_per_giorno', ['result' => $result]);
