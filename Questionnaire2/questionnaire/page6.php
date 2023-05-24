<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire - Département Logistique</title>
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
            color: #FF0000;
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
    <h1>Questionnaire - D&eacute;partement Logistique</h1>
    <form method="POST" action="traitementlogistique.php">
        <div class="question-group">
            <h2>Question 1 :</h2>
            <label for="question1">Quel aspect de la gestion des projets logistiques n&eacute;cessite le plus d'am&eacute;liorations selon vous ?</label>
            <textarea id="question1" name="question1" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 2 :</h2>
            <label for="question2">Quels sont les principaux d&eacute;fis auxquels vous &ecirc;tes confront&eacute;s dans la planification des op&eacute;rations logistiques ?</label>
            <textarea id="question2" name="question2" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 3 :</h2>
            <label for="question3">Comment &eacute;valuez-vous l'efficacit&eacute; du syst&egrave;me actuel de gestion des stocks dans le d&eacute;partement logistique ?</label>
            <select id="question3" name="question3" required>
                <option value="">Veuillez choisir une r&eacute;ponse</option>
                <option value="Tr&egrave;s efficace">Tr&egrave;s efficace</option>
                <option value="Efficace">Efficace</option>
                <option value="Moyennement efficace">Moyennement efficace</option>
                <option value="Peu efficace">Peu efficace</option>
                <option value="Pas du tout efficace">Pas du tout efficace</option>
            </select>
        </div>

        <div class="question-group">
            <h2>Question 4 :</h2>
            <label for="question4">Quelles am&eacute;liorations proposeriez-vous pour optimiser le processus de livraison des produits dans le d&eacute;partement logistique ?</label>
            <textarea id="question4" name="question4" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 5 :</h2>
            <label for="question5">Comment &eacute;valuez-vous la collaboration entre le d&eacute;partement logistique et les autres d&eacute;partements de l'entreprise ?</label>
            <select id="question5" name="question5" required>
                <option value="">Veuillez choisir une r&eacute;ponse</option>
                <option value="Tr&egrave;s bonne">Tr&egrave;s bonne</option>
                <option value="Bonne">Bonne</option>
                <option value="Moyenne">Moyenne</option>
                <option value="Faible">Faible</option>
                <option value="Tr&egrave;s faible">Tr&egrave;s faible</option>
            </select>
        </div>

        <div class="question-group">
            <h2>Question 6 :</h2>
            <label for="question6">Quelles sont les taches manuelles que vous souhaitez automatiser grace au nouveau syst&egrave;me de gestion d'activit&eacute;s ??</label>
            <textarea id="question6" name="question6" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 7 :</h2>
            <label for="question7">Comment mesurez-vous les performances et les r&eacute;sultats du d&eacute;partement logistique ?</label>
            <textarea id="question7" name="question7" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 8 :</h2>
            <label for="question8">Quels sont les principaux facteurs que vous consid&eacute;rez importants lors de la s&eacute;lection de nouveaux transporteurs et prestataires logistiques ?</label>
            <textarea id="question8" name="question8" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 9 :</h2>
            <label for="question9">Avez-vous des suggestions ou des recommandations sp&eacute;cifiques pour am&eacute;liorer l'interface d'Odoo afin de faciliter les t&acirc;ches li&eacute;es au d&eacute;partement logistique ?</label>
            <textarea id="question9" name="question9" rows="4" required></textarea>
        </div>

        <div class="question-group">
            <h2>Question 10 :</h2>
            <label for="question10">Quels crit&egrave;res ou mesures sugg&eacute;rez-vous de suivre pour &eacute;valuer et am&eacute;liorer l'efficacit&eacute; globale du d&eacute;partement logistique ?</label>
            <textarea id="question10" name="question10" rows="4" required></textarea>
        </div>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
