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
    $sql = "SELECT * FROM formulaire WHERE email = '$email'";
    $result = $conn->query($sql);

    // V�rification du r�sultat de la requ�te
    if ($result === false) {
        die("Erreur de requ�te : " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // L'e-mail existe d�j�, redirection avec un message d'erreur
        $row = $result->fetch_assoc();
        $existingEmail = $row['email'];
        $error = "L'e-mail <strong>$existingEmail</strong> est d&eacutej&agrave utilis&eacute. Veuillez r&eacuteessayer avec un autre e-mail.";
        header("Location: page d'acceuil.php?error=" . urlencode($error));
        exit();
    } else {
        // L'e-mail n'existe pas, ins�rer l'e-mail dans la table formulaire
        $sqlInsert = "INSERT INTO formulaire (email) VALUES ('$email')";
        if ($conn->query($sqlInsert) === false) {
            die("Erreur lors de l'insertion de l'e-mail : " . $conn->error);
        }
    }
}

// Fermer la connexion � la base de donn�es
$conn->close();

// Rediriger vers la page d'acceuil.php si l'e-mail existe d�j� avec le message d'erreur
if (isset($_GET['error'])) {
    $error = urldecode($_GET['error']);
    echo '<p class="error">' . $error . '</p>';
}

// Rediriger vers la page1.php
header("Location: page1.php");
exit();
?>
