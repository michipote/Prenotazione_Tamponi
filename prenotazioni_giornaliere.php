<?php

require 'vendor/autoload.php';
include_once("config.php");

use League\Plates\Engine;

//Viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');

//Query di inserimento preparata
$sql = "SELECT * FROM prenotazione WHERE giorno = current_date()";

$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();

//Rendo un template che mi visualizza una tabella
echo $templates->render('prenotazioni_giornaliere', ['result' => $result]);