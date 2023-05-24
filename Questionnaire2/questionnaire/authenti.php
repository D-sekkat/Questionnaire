<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questionnaire";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Vérification si l'e-mail a été soumis
if (isset($_POST['email'])) {
    // Récupération de l'e-mail saisi dans le formulaire
    $email = $_POST['email'];

    // Requête SQL pour vérifier si l'e-mail existe déjà
    $sql = "SELECT * FROM Employe WHERE Email = '$email'";

    $result = $conn->query($sql);

    // Vérification du résultat de la requête
    if ($result === false) {
        die("Erreur de requête : " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // L'e-mail existe déjà, redirection avec un message d'erreur
        $error = "Cet e-mail est déjà utilisé. Veuillez réessayer avec un autre e-mail.";
        header("Location: connexion.html?error=" . urlencode($error));
        exit();
    }
}

// Si l'e-mail n'existe pas, vous pouvez procéder à l'authentification de l'utilisateur ou le rediriger vers la page suivante

$conn->close();
?>
