<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
    <title>Questionnaire - Choix du service et des taches</title>
    <style>
        body {
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            display: flex;
            
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #FF0000 ;
            margin-bottom: 20px;
            text-align: center;
        }

        h2 {
            font-size: 18px;
            font-weight: bold;
            color: #black;
            margin-bottom: 10px;
        }

        .question-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="checkbox"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Questionnaire</h1>
        <form method="POST" action="page1.php">
            <div class="question-group">
                <h2>Choix du service</h2>
                <label for="service">Service :</label>
                <select id="service" name="service" onchange="redirectToServicePage(this.value)" required>
                    <option value="">Choisir un service...</option>
                    <option value="direction administrative">Dir&eacute;ction Administrative</option>
                    <option value="technique">Dir&eacute;ction Technique</option>
                    <option value="commercial">D&eacutepartement Commercial</option>
                    <option value="logistique">Logistique</option>
                    <option value="finance">Finance</option>
                    <option value="achats">Achats</option>
                </select>
            </div>

            

            <div style="text-align: center;">
                <input type="submit" value="Continuer">
            </div>
        </form>
    </div>

      <script>
        function redirectToServicePage(selectedService) {
            if (selectedService === "direction administrative") {
                window.location.href = "page2.php";
            } else if (selectedService === "technique") {
                window.location.href = "page3.php";
            } else if (selectedService === "commercial") {
                window.location.href = "page5.php";
            } else if (selectedService === "logistique") {
                window.location.href = "page6.php";
            } else if (selectedService === "finance") {
                window.location.href = "page7.php";
            } else if (selectedService === "achats") {
                window.location.href = "page4.php";
            }
        }
    </script>

</body>
</html>
