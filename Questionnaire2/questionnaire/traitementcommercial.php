<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les réponses du formulaire
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = $_POST["question4"];
    $question5 = $_POST["question5"];
    $question6 = isset($_POST["question6"]) ? $_POST["question6"] : '';
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = isset($_POST["question10"]) ? $_POST["question10"] : '';
    $question11 = $_POST["question11"];
    $date_reponse = date("Y-m-d");
    
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "questionnaire");
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    
    // Préparer et exécuter la requête d'insertion avec des déclarations préparées
    $stmt = $conn->prepare("INSERT INTO questionnaire_commercial (question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, date_reponse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10, $question11, $date_reponse);
    
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
    
    // Fermer la connexion et la déclaration préparée
    $stmt->close();
    $conn->close();
} else {
    echo "Le questionnaire n'a pas &eacute;t&eacute; soumis.";
}
?>
