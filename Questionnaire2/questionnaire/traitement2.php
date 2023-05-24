<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les réponses du formulaire
    $reponse1 = $_POST["reponse1"];
    $reponse2 = $_POST["reponse2"];
    $reponse3 = $_POST["reponse3"];
    $choix_multiple = isset($_POST["choixmultiple"]) && is_array($_POST["choixmultiple"]) ? implode(", ", $_POST["choixmultiple"]) : "";
    $reponse5 = $_POST["reponse5"];
    $zonetext = $_POST["zonetext"];
    $reponse7 = $_POST["reponse7"];
    $choix_multiple2 = isset($_POST["choixmultiple2"]) && is_array($_POST["choixmultiple2"]) ? implode(", ", $_POST["choixmultiple2"]) : "";
    $reponse9 = $_POST["reponse9"];
    $question10 = $_POST["question10"];
   
    $date_confirmation = date("Y-m-d");
    
    // Connexion à la base de données
    $conn = new mysqli("localhost", "root", "", "questionnaire");
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }
    
    // Préparer et exécuter la requête d'insertion avec des déclarations préparées
    $stmt = $conn->prepare("INSERT INTO servicetechnique (reponse1, reponse2, reponse3, choixmultiple, reponse5, zonetext, reponse7, choixmultiple2, reponse9, question10, date_reponse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssssssss", $reponse1, $reponse2, $reponse3, $choix_multiple, $reponse5, $zonetext, $reponse7, $choix_multiple2, $reponse9, $question10, $date_confirmation);
    
    if ($stmt->execute()) {
        // Afficher la fenêtre modale de remerciement en utilisant JavaScript
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
            <script>
                // Fonction pour afficher la fenêtre modale de remerciement
                function showThankYouModal() {
                    var modal = document.getElementById("thankYouModal");
                    modal.style.display = "block";
                }
            </script>
        </head>
        <body>
          
            
            <!-- Fenêtre modale de remerciement -->
            <div id="thankYouModal" style="display: none;">
                <div class="message">
                    <h1>Merci pour votre r&eacute;ponse</h1>
                    <p>Nous avons bien enregistr&eacute; votre questionnaire.</p>
                </div>
            </div>
            
            <!-- Appeler la fonction pour afficher la fenêtre modale de remerciement -->
            <script>
                showThankYouModal();
            </script>
        </body>
        </html>
        ';
    } else {
        echo "Erreur lors de l'exécution de la requête : " . $stmt->error;
    }
    
    // Fermer la connexion et la déclaration préparée
    $stmt->close();
    $conn->close();
}

?>
