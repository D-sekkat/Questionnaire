<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // V�rifier si toutes les donn�es ont �t� soumises
        // R�cup�rer les r�ponses du formulaire
        $question1 = $_POST["question1"];
        $question2 = $_POST["question2"];
        $question3 = $_POST["question3"];
        $question4 = $_POST["question4"];
        $question5 = $_POST["question5"];
        $question6 = $_POST["question6"];
        $question7 = $_POST["question7"];
        $question8 = $_POST["question8"];
        $question9 = $_POST["question9"];
        $question10 = $_POST["question10"];
        $question11 = $_POST["question11"];
        $date_confirmation = date("Y-m-d");

        // Connexion � la base de donn�es
        $conn = new mysqli("localhost", "root", "", "questionnaire");
        if ($conn->connect_error) {
            die("Erreur de connexion � la base de donn�es : " . $conn->connect_error);
        }

        // Pr�parer et ex�cuter la requ�te d'insertion avec des d�clarations pr�par�es
        $stmt = $conn->prepare("INSERT INTO traitementfinance (question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, question11, date_reponse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssss", $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10, $question11, $date_confirmation);

        if ($stmt->execute()) {
            // Afficher la fen�tre modale de remerciement en utilisant JavaScript
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
                // Fonction pour afficher la fen�tre modale de remerciement
                function showThankYouModal() {
                    var modal = document.getElementById("thankYouModal");
                    modal.style.display = "block";
                }
            </script>
        </head>
        <body>
                
                
            <!-- Fen�tre modale de remerciement -->
            <div id="thankYouModal" style="display: none;">
                <div class="message">
                    <h1>Merci pour votre r&eacute;ponse</h1>
                    <p>Nous avons bien enregistr&eacute; votre questionnaire.</p>
                </div>
            </div>
                
            <!-- Appeler la fonction pour afficher la fen�tre modale de remerciement -->
            <script>
                showThankYouModal();
            </script>
        </body>
        </html>
        ';
        } else {
            echo "Erreur lors de l'ex�cution de la requ�te : " . $stmt->error;
        }
        
        // Fermer la connexion et la d�claration pr�par�e
        $stmt->close();
        $conn->close();
    }

    ?>
        