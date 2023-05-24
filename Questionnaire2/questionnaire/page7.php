<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire - Departement Financier</title>
    <style>
        body {
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
            text-align: center;
            
        }

        h2 {
            font-size: 18px;
            font-weight: bold;
            color: #FF0000 ;
            margin-bottom: 10px;
        }

        .question-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 5px;
        }

        input[type="checkbox"], input[type="radio"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #0078d7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Questionnaire - D&eacute;partement Financier</h1>
   <form method="POST" action="traitementfinance.php">
        <div class="question-group">
            <h2>Question 1 :</h2>
            <label for="question1">Dans quelle mesure &eacute;valuez-vous l'efficacit&eacute; du syst&egrave;me de gestion de test pour le suivi et la gestion ?</label>
            <select id="question1" name="question1" required>
                                <option value="">Veuillez choisir une r&eacute;ponse...</option>
                
                <option value="Tr&egrave;s efficace">Tr&egrave;s efficace</option>
                <option value="Efficace">Efficace</option>
                <option value="Moyennement efficace">Moyennement efficace</option>
                <option value="Peu efficace">Peu efficace</option>
                <option value="Pas du tout efficace">Pas du tout efficace</option>
            </select>
        </div>

        <div class="question-group">
            <h2>Question 2 :</h2>
            <label for="question2">Quels sont les principaux d&eacute;fis auxquels vous &ecirc;tes confront&eacute;(e) dans l'utilisation du syst&egrave;me dans le service financier ?</label>
<textarea id="question2" name="question2" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 3 :</h2>
            <label>&Agrave; quelle fr&eacute;quence utilisez-vous le syst&egrave;me de gestion de test dans votre travail quotidien ?</label>
            <label for="question3_1"><input type="radio" id="question3_1" name="question3" value="Rarement" required> Rarement</label>
            <label for="question3_2"><input type="radio" id="question3_2" name="question3" value="Occasionnellement" required> Occasionnellement</label>
            <label for="question3_3"><input type="radio" id="question3_3" name="question3" value="Quotidiennement" required> Quotidiennement</label>
        </div>

        <div class="question-group">
            <h2>Question 4 :</h2>
            <label for="question4">Dans quelle mesure le syst&egrave;me de gestion de test a-t-il contribu&eacute; &agrave; l'efficacit&eacute; globale du service financier ?</label>
            <select id="question4" name="question4" required>
                                                <option value="">Veuillez choisir une r&eacute;ponse...</option>
                
                <option value="Tr&egrave;s significativement">Tr&egrave;s significativement</option>
                <option value="Mod&eacute;r&eacute;ment">Mod&eacute;r&eacute;ment</option>
                <option value="Minimale">Minimale</option>
                <option value="Pas du tout">Pas du tout</option>
            </select>
        </div>

        <div class="question-group">
        <h2>Question 5:</h2>
<label for="question5">Comment &eacute;valuez-vous la facilit&eacute; d'utilisation de l'interface utilisateur du syst&egrave;me de gestion de test dans le service financier ?</label>
<select id="question5" name="question5" required>
                                   <option value="">Veuillez choisir une r&eacute;ponse...</option>
   
    <option value="Tr&egrave;s facile">Tr&egrave;s facile</option>
    <option value="Facile">Facile</option>
    <option value="Neutre">Neutre</option>
    <option value="Difficile">Difficile</option>
    <option value="Tr&egrave;s difficile">Tr&egrave;s difficile</option>
</select>
</div>

        <div class="question-group">
            <h2>Question 6 :</h2>
            <label for="question6">Quels sont les avantages les plus importants que vous avez observ&eacute;s gr&acirc;ce &agrave; l'utilisation du syst&egrave;me  ?</label>
            <textarea id="question6" name="question6" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 7 :</h2>
            <label for="question7">Comment le syst&egrave;me  pourrait-il &ecirc;tre am&eacute;lior&eacute; pour mieux r&eacute;pondre aux besoins du service financier ?</label>
            <textarea id="question7" name="question7" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 8 :</h2>
            <label> Avez-vous re&ccedil;u une formation ad&eacute;quate pour utiliser efficacement le syst&egrave;me de gestion de test dans le service financier ?</label>
            <label for="question8_1"><input type="radio" id="question8_1" name="question8" value="Oui" required> Oui</label>
            <label for="question8_2"><input type="radio" id="question8_2" name="question8" value="Non" required> Non</label>
        </div>

        <div class="question-group">
            <h2>Question 9 :</h2>
            <label for="question9">Dans quelle mesure &eacute;valuez-vous l'efficacit&eacute; du syst&egrave;me  pour les pr&eacute;sentations et la validation des commandes ?</label>
            <select id="question9" name="question9" required>
                                                <option value="">Veuillez choisir une r&eacute;ponse...</option>
                
                <option value="Tr&egrave;s efficace">Tr&egrave;s efficace</option>
                <option value="Efficace">Efficace</option>
                <option value="Moyennement efficace">Moyennement efficace</option>
                <option value="Peu efficace">Peu efficace</option>
                <option value="Pas du tout efficace">Pas du tout efficace</option>
            </select>
        </div>


        <div class="question-group">
            <h2>Question 10 :</h2>
            <label for="question10">Avez-vous des suggestions ou des commentaires suppl&eacute;mentaires sur le syst&egrave;me de gestion de test dans le service financier ?</label>
            <textarea id="question10" name="question10" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 11 :</h2>
            <label for="question11">&Ecirc;tes-vous satisfait(e) de l'exp&eacute;rience globale d'utilisation du syst&egrave;me de gestion de test dans le service financier ?</label>
            <label for="question11_1"><input type="radio" id="question11_1" name="question11" value="Oui" required> Oui</label>
            <label for="question11_2"><input type="radio" id="question11_2" name="question11" value="Non" required> Non</label>
        </div>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
