<?php

//Esempio di file di configurazione
//Creare un file config.php e inserire le seguenti righe
//adattandole alla propria configurazione

//Dice a livello dello script che gli errori verranno mostrati
//e che non verranno loggati
ini_set('display_errors', 1);
ini_set('log_errors', 0);

$host = 'your host';
$db = 'your db';
$user = 'your username';
$pass = 'your password';

//Stringa di connessione
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;


$pdo = new PDO($dsn, $user, $pass);