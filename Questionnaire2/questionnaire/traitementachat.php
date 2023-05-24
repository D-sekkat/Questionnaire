<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les réponses du formulaire
    $question1 = $_POST["question1"] ?? "";
    $question2 = $_POST["question2"] ?? "";
    $question2_argument = $_POST["question2_argument"] ?? "";
    
    // Vérifier si question3 est un tableau
    $question3 = isset($_POST["question3"]) ? $_POST["question3"] : array(); // Assurez-vous que c'est un tableau
    
    $question3_option1 = in_array("Achats pour la distribution externe", (array)$question3) ? 1 : 0;
    $question3_option2 = in_array("Achats pour l'utilisation externe", (array)$question3) ? 1 : 0;
    $question3_option3 = in_array("Autres", (array)$question3) ? 1 : 0;
    
    $question3_argument = $_POST["question3_argument"] ?? "";
    $question4 = $_POST["question4"] ?? "";
    $question4_argument = $_POST["question4_argument"] ?? "";
    $question5 = $_POST["question5"] ?? "";
    $question6 = $_POST["question6"] ?? "";
    $question7 = $_POST["question7"] ?? "";
    $question8 = $_POST["question8"] ?? "";
    $question8_argument = $_POST["question8_argument"] ?? "";
    $question9 = $_POST["question9"] ?? "";
    $date_reponse = date('Y-m-d H:i:s');
    
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "questionnaire");
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    
    // Préparer et exécuter la requête d'insertion avec des déclarations préparées
    $stmt = $conn->prepare("INSERT INTO departementachat (question1, question2, question2_argument, question3_option1, question3_option2, question3_option3, question3_argument, question4, question4_argument, question5, question6, question7, question8, question8_argument, question9, date_reponse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssssss", $question1, $question2, $question2_argument, $question3_option1, $question3_option2, $question3_option3, $question3_argument, $question4, $question4_argument, $question5, $question6, $question7, $question8, $question8_argument, $question9, $date_reponse);
    
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
                    font-size: 18px;
                    margin-bottom: 20px;
                }
            </style>
        </head>
        <body>
            <div class="message">
                <h1>Merci !</h1>
                <p>Votre r&eacute;ponse a &eacutet&eacute; enregistr&eacute;e avec succ&eacute;s.</p>
            </div>
        </body>
        </html>';
    } else {
        echo "Erreur lors de l'insertion des données : " . $stmt->error;
    }
    
    // Fermer la connexion et libérer les ressources
    $stmt->close();
    $conn->close();
} else {
    echo "Le formulaire n'a pas &eacute;t&eacute; soumis.";
}
?>
