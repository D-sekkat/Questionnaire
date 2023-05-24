<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire - Service Administratif </title>
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
    <h1>Questionnaire - Direction Administratif </h1>
    <form method="POST" action="traitement.php">


<!-- Questions générales pour tous les modules -->

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question1">Question 1: Quelle est la fr&eacute;quence d'utilisation du syst&egrave;me dans vos t&acirc;ches administratives quotidiennes ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse1" value="tr&egrave;s-fr&eacute;quemment">Tr&egrave;s fr&eacute;quemment</label>
        <label><input type="radio" name="reponse1" value="occasionnellement">Occasionnellement</label>
        <label><input type="radio" name="reponse1" value="rarement">Rarement</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question2">Question 2: Quels sont les principaux d&eacute;fis auxquels vous &ecirc;tes confront&eacute; lors de l'utilisation du syst&egrave;me  ?</label>
    <textarea id="question2" name="question2" required wrap="soft"></textarea>
</div>


<div class="question-group" style="margin-bottom: 20px;">
    <label for="question3">Question 3: &Ecirc;tes-vous satisfait de la convivialit&eacute; de l'interface utilisateur du syst&egrave;me ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse3" value="tr&egrave;s-satisfait">Oui, tr&egrave;s satisfait</label>
        <label><input type="radio" name="reponse3" value="am&eacute;liorations-possibles">Oui, mais cela pourrait &ecirc;tre am&eacute;lior&eacute;</label>
        <label><input type="radio" name="reponse3" value="non-satisfait">Non, pas du tout satisfait</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question4">Question 4: Avez-vous remarqu&eacute; des probl&egrave;mes de performance ou des retards lors de l'envoi ou de la r&eacute;ception de messages via le syst&egrave;me ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse4" value="oui">Oui</label>
        <label><input type="radio" name="reponse4" value="non">Non</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question5">Question 5: &Ecirc;tes-vous en mesure de retrouver facilement des messages archiv&eacute;s ou des discussions pr&eacute;c&eacute;dentes dans le syst&egrave;me?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse5" value="oui-facilement">Oui, facilement</label>
        <label><input type="radio" name="reponse5" value="oui-difficile-parfois">Oui, mais cela peut &ecirc;tre difficile parfois</label>
        <label><input type="radio" name="reponse5" value="non-difficile">Non, c'est difficile de retrouver ce que je cherche</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question6">Question 6: Avez-vous eu besoin de recevoir une formation suppl&eacute;mentaire ou un support technique pour utiliser efficacement le syst&egrave;me ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse6" value="oui">Oui</label>
        <label><input type="radio" name="reponse6" value="non">Non</label>
    </div>
</div>


<div class="question-group" style="margin-bottom: 20px;">
    <label for="question7">Question 7: Avez-vous rencontr&eacute; des probl&egrave;mes de confidentialit&eacute; ou de s&eacute;curit&eacute; li&eacute;s au syst&egrave;me  ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse7" value="oui">Oui</label>
        <label><input type="radio" name="reponse7" value="non">Non</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question8">Question 8: Est-ce que le syst&egrave;me  r&eacute;pond &agrave; a tous vos besoins en termes de fonctionnalit&eacute;s ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse8" value="oui">Oui</label>
        <label><input type="radio" name="reponse8" value="partiellement">Partiellement</label>
        <label><input type="radio" name="reponse8" value="non">Non</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question9">Question 9: Quelles fonctionnalit&eacute;s suppl&eacute;mentaires ou am&eacute;liorations souhaiteriez-vous voir dans le syst&egrave;me ?</label>
    <textarea id="question9" name="question9" required wrap="soft"></textarea>
</div>






    

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question10"> Question 10: Quels sont les principaux avantages que vous avez constat&eacute;s en utilisant le syst&egrave;me int&eacute;gr&eacute; de test ?</label>
    <textarea id="question10" name="question10" required wrap="soft"></textarea>
</div>
<div class="question-group" style="margin-bottom: 20px;">
    <label for="question11"> Question 11: Avez-vous remarqu&eacute; des erreurs ou des incoh&eacute;rences dans les donn&eacute;es g&eacute;n&eacute;r&eacute;es par le syst&egrave;me int&eacute;gr&eacute; de test ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse11" value="Oui"> Oui</label>
        <label><input type="radio" name="reponse11" value="Non"> Non</label>
    </div>
</div>
<div class="question-group" style="margin-bottom: 20px;">
    <label for="question12"> Question 12: Quelles sont les t&acirc;ches manuelles que vous souhaiteriez rendre automatiques ?</label>
    <textarea id="question12" name="question12" required wrap="soft"></textarea>
</div>


        <input type="submit" value="Envoyer">
    </form>
</body>
</html>