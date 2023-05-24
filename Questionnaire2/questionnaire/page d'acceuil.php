<!DOCTYPE html>
<html>
<head>
    <title>Interface de connexion</title>
    <style>
        /* CSS */
        
        .error {
            color: red;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
                        background-image: url('https://images5.alphacoders.com/437/437048.jpg');
            
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Couleur de fond de la liste */
            padding: 20px;
            border-radius: 5px;
        }

        .container h2 {
            color: black;
        }

        .container ul {
            list-style: none;
            padding: 0;
        }

        .container li {
            margin-bottom: 10px;
        }

        label, input[type="email"] {
            color: black; /* Couleur du texte de l'e-mail en noir */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Interface de connexion</h2>
        <?php
        if (isset($_GET['error'])) {
            $error = urldecode($_GET['error']);
            echo '<p class="error">' . $error . '</p>';
        }
        ?>
        <form action="verification.php" method="post">
            <ul>
                <li>
                    <label for="email">E-mail :</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                </li>
                <li>
                    <input type="submit" value="Se connecter">
                </li>
            </ul>
        </form>
    </div>
</body>
</html>
