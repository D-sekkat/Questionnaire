<?php
// Connexion � la base de donn�es
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questionnaire";

$conn = new mysqli($servername, $username, $password, $dbname);

// V�rification de la connexion
if ($conn->connect_error) {
    die("La connexion � la base de donn�es a �chou� : " . $conn->connect_error);
}

// V�rification si l'e-mail a �t� soumis
if (isset($_POST['email'])) {
    // R�cup�ration de l'e-mail saisi dans le formulaire
    $email = $_POST['email'];

    // Requ�te SQL pour v�rifier si l'e-mail existe d�j�
    $sql = "SELECT * FROM Employe WHERE Email = '$email'";

    $result = $conn->query($sql);

    // V�rification du r�sultat de la requ�te
    if ($result === false) {
        die("Erreur de requ�te : " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // L'e-mail existe d�j�, redirection avec un message d'erreur
        $error = "Cet e-mail est d�j� utilis�. Veuillez r�essayer avec un autre e-mail.";
        header("Location: connexion.html?error=" . urlencode($error));
        exit();
    }
}

// Si l'e-mail n'existe pas, vous pouvez proc�der � l'authentification de l'utilisateur ou le rediriger vers la page suivante

$conn->close();
?>
