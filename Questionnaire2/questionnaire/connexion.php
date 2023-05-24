<?php
// Remplacez par le nom d'hôte de votre serveur de base de données
$host = 'localhost'; 
// Remplacez par votre nom d'utilisateur de base de données
$username = 'root';
// Remplacez par votre mot de passe de base de données
$password = ''; 
// Remplacez par le nom de votre base de données

$database = 'questionnaire';
// Créer une connexion à la base de données
$connection = new mysqli($host, $username, $password, $database);

// Vérifier si la connexion a échoué
if ($connection->connect_error) {
    die("La connexion à la base de données a échoué : " . $connection->connect_error);
}
 ?>