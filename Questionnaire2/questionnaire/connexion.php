<?php
// Remplacez par le nom d'h�te de votre serveur de base de donn�es
$host = 'localhost'; 
// Remplacez par votre nom d'utilisateur de base de donn�es
$username = 'root';
// Remplacez par votre mot de passe de base de donn�es
$password = ''; 
// Remplacez par le nom de votre base de donn�es

$database = 'questionnaire';
// Cr�er une connexion � la base de donn�es
$connection = new mysqli($host, $username, $password, $database);

// V�rifier si la connexion a �chou�
if ($connection->connect_error) {
    die("La connexion � la base de donn�es a �chou� : " . $connection->connect_error);
}
 ?>