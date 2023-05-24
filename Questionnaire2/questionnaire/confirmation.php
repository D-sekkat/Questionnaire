<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "questionnaire");
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération des informations de confirmation
$sqlSelect = "SELECT * FROM confirmation";
$result = $conn->query($sqlSelect);

// Affichage des informations
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID : " . $row["id"] . "<br>";
        echo "Service : " . $row["service"] . "<br>";
        echo "Tâches : " . $row["taches"] . "<br>";
        echo "Date de confirmation : " . $row["date_confirmation"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Aucune confirmation trouvée.";
}

// Fermeture de la connexion à la base de données
$conn->close();
