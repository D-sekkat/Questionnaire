<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les réponses du formulaire
    $reponse1 = $_POST["reponse1"];
    $question2 = $_POST["question2"];
    $reponse3 = $_POST["reponse3"];
    $reponse4 = $_POST["reponse4"];
    $reponse5 = $_POST["reponse5"];
    $reponse6 = $_POST["reponse6"];
    $reponse7 = $_POST["reponse7"];
    $reponse8 = $_POST["reponse8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];
    $reponse11 = $_POST["reponse11"];
    $question12 = $_POST["question12"];
    $date_confirmation = date("Y-m-d");
    
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "questionnaire");
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    
    // Préparer et exécuter la requête d'insertion avec des déclarations préparées
    $stmt = $conn->prepare("INSERT INTO page2_reponses (reponse1, question2, reponse3, reponse4, reponse5, reponse6, reponse7, reponse8, question9, question10, reponse11, question12, date_confirmation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssssssssss", $reponse1, $question2, $reponse3, $reponse4, $reponse5, $reponse6, $reponse7, $reponse8, $question9, $question10, $reponse11, $question12, $date_confirmation);
    
    if ($stmt->execute()) {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                           body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    font-family: Arial, sans-serif;
                    background-color: #f1f1f1;
                }
                
                .message {
                    text-align: center;
                    padding: 20px;
                    background-color: #ffffff;
                    border-radius: 5px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }
                
                .message h1 {
                    font-size: 24px;
                    margin-bottom: 10px;
                }
                
                .message p {
                    font-size: 16px;
                    margin-bottom: 20px;
                }
            </style>
        </head>
        <body>
            <div class="message">
                <h1>Merci pour votre r&eacute;ponse</h1>
                <p>Nous avons bien enregistr&eacute; votre questionnaire.</p>
            </div>
        </body>
        </html>';
    } else {
        echo "Erreur lors de l'enregistrement du questionnaire : " . $stmt->error;
    }
    
    // Fermeture de la connexion à la base de données
    $stmt->close();
    $conn->close();
} else {
    echo "Le questionnaire n'a pas &eacute;t&eacute; soumis.";

// Fermer la connexion et la déclaration préparée
$stmt->close();
$conn->close();
}
?>
