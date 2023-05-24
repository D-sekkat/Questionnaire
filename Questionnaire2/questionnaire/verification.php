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
    $sql = "SELECT * FROM formulaire WHERE email = '$email'";
    $result = $conn->query($sql);

    // Vérification du résultat de la requête
    if ($result === false) {
        die("Erreur de requête : " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // L'e-mail existe déjà, redirection avec un message d'erreur
        $row = $result->fetch_assoc();
        $existingEmail = $row['email'];
        $error = "L'e-mail <strong>$existingEmail</strong> est d&eacutej&agrave utilis&eacute. Veuillez r&eacuteessayer avec un autre e-mail.";
        header("Location: page d'acceuil.php?error=" . urlencode($error));
        exit();
    } else {
        // L'e-mail n'existe pas, insérer l'e-mail dans la table formulaire
        $sqlInsert = "INSERT INTO formulaire (email) VALUES ('$email')";
        if ($conn->query($sqlInsert) === false) {
            die("Erreur lors de l'insertion de l'e-mail : " . $conn->error);
        }
    }
}

// Fermer la connexion à la base de données
$conn->close();

// Rediriger vers la page d'acceuil.php si l'e-mail existe déjà avec le message d'erreur
if (isset($_GET['error'])) {
    $error = urldecode($_GET['error']);
    echo '<p class="error">' . $error . '</p>';
}

// Rediriger vers la page1.php
header("Location: page1.php");
exit();
?>
