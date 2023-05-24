<?php
// Connexion � la base de donn�es
$conn = new mysqli("localhost", "root", "", "questionnaire");
if ($conn->connect_error) {
    die("Erreur de connexion � la base de donn�es : " . $conn->connect_error);
}

// R�cup�ration des informations de confirmation
$sqlSelect = "SELECT * FROM confirmation";
$result = $conn->query($sqlSelect);

// Affichage des informations
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID : " . $row["id"] . "<br>";
        echo "Service : " . $row["service"] . "<br>";
        echo "T�ches : " . $row["taches"] . "<br>";
        echo "Date de confirmation : " . $row["date_confirmation"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Aucune confirmation trouv�e.";
}

// Fermeture de la connexion � la base de donn�es
$conn->close();
