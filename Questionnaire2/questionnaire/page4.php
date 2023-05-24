<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire - Departement Achat </title>
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
            color: #FF0000;
            margin-bottom: 20px;
            text-align:center;
        }

        h2 {
            font-size: 18px;
            font-weight: bold;
            color: black;
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

        input[type="radio"] {
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
    <h1>Questionnaire - Service Achat </h1>
<body>
    <form method="POST" action="traitementachat.php">
 <div class="question-group">
    <h2>1.Le syst&egrave;me actuel r&eacute;pond-il efficacement &agrave; vos besoins ?</h2>
    <label><input type="radio" name="question1" value="Vrai"> Vrai</label>
    <label><input type="radio" name="question1" value="Faux"> Faux</label>
</div>

<div class="question-group">
    <h2>2.Recommanderiez-vous d'apporter des am&eacute;liorations au syst&egrave;me ?</h2>
    <label><input type="radio" name="question2" value="Oui"> Oui</label>
    <label><input type="radio" name="question2" value="Non"> Non</label>
    <br>Argumentez vos r&eacute;ponses :<br>
    <textarea id="question2_argument" name="question2_argument" wrap="soft"></textarea>
</div>

<div class="question-group">
    <h2>3.Quelles t&acirc;ches du d&eacute;partement d'achat souhaiteriez-vous automatiser ? (S&eacute;lectionnez toutes les options qui s'appliquent)</h2>
    <label><input type="checkbox" name="question3" value="Achats pour la distribution externe"> Achats pour la distribution externe</label>
    <label><input type="checkbox" name="question3" value="Achats pour l'utilisation externe"> Achats pour l'utilisation externe</label>
    <label><input type="checkbox" name="question3" value="Autres"> Autres</label>
    <br>Argumentez vos r&eacute;ponses :<br>
    <textarea id="question3_argument" name="question3_argument" wrap="soft"></textarea>
</div>

<div class="question-group">
    <h2>4.Les principales difficult&eacute;s auxquelles vous &ecirc;tes confront&eacute;(e) dans votre travail quotidien li&eacute; au processus d'achat peuvent-elles &ecirc;tre am&eacute;lior&eacute;es ?</h2>
    <label><input type="radio" name="question4" value="Oui"> Oui</label>
    <label><input type="radio" name="question4" value="Non"> Non</label>
    <br>Argumentez vos r&eacute;ponses :<br>
    <textarea id="question4_argument" name="question4_argument" wrap="soft"></textarea>
</div>


<div class="question-group">
    <h2>5.Quels sont les principaux indicateurs de performance que vous utilisez pour &eacute;valuer la r&eacute;ussite de vos activit&eacute;s d'achat ?</h2>
    <textarea name="question5" wrap="soft"></textarea>
</div>
<div class="question-group">
    <h2>6.Quelles informations ou rapports sont essentiels pour vous aider &agrave; prendre des d&eacute;cisions &eacute;clair&eacute;es dans le processus d'achat ?</h2>
    <textarea name="question6" wrap="soft"></textarea>
</div>

<div class="question-group">
    <h2>7.Comment envisagez-vous l'int&eacute;gration du syst&egrave;me de gestion avec d'autres syst&egrave;mes ?</h2>
    <textarea name="question7" wrap="soft"></textarea>
</div>
<div class="question-group">
    <h2>8.Avez-vous des pr&eacute;occupations en mati&egrave;re de s&eacute;curit&eacute; des donn&eacute;es li&eacute;es aux activit&eacute;s d'achat et aux informations sensibles ?</h2>
    <label><input type="radio" name="question8" value="Oui"> Oui</label>
    <label><input type="radio" name="question8" value="Non"> Non</label>
    <br>Argumentez vos r&eacute;ponses :<br>
    <textarea id="question8_argument" name="question8_argument" wrap="soft"></textarea>
</div>

<div class="question-group">
    <h2>9.Comment voyez-vous l'&eacute;volution future du service d'achat ? </h2>
    <textarea name="question9" wrap="soft"></textarea>
</div>




 
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
