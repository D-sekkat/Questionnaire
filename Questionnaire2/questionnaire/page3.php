<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire - Service technique </title>
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
    <h1>Questionnaire - Direction technique </h1>
 <form method="POST" action="traitement2.php">


<!-- Questions générales pour tous les modules -->

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question1">Question 1: Le syst&eacute;me actuel permet-il de suivre l'historique des interventions de maintenance effectu&eacute;es sur les mat&eacute;riels industriels ?</label>
    <div class="radio-group">
  
        <label><input type="radio" name="reponse1" value="oui">Oui</label>
        <label><input type="radio" name="reponse1" value="non">Non</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
 <label for="question2">Question 2: Aimeriez-vous pouvoir g&eacute;n&eacute;rer des rapports automatis&eacute;s ?</label>
 
      <div class="radio-group">
        <label><input type="radio" name="reponse2" value="oui">Oui</label>
        <label><input type="radio" name="reponse2" value="non">Non</label>
</div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question3">Question 3: Parmi les fonctionnalit&eacute;s suivantes, laquelle est la plus importante pour vous lors de l'installation ?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse3" value="Gestion des ressources">Gestion des ressources</label>
        <label><input type="radio" name="reponse3" value="Suivi des &eacute;tapes d'installation">Suivi des &eacute;tapes d'installation</label>
        <label><input type="radio" name="reponse3" value="Planification des interventions">Planification des interventions</label>
        <label><input type="radio" name="reponse3" value="Suivi des pièces détachées">Suivi des pi&egrave;ces d&eacute;tach&eacute;es</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question4">Question 4: Quelles informations devez-vous suivre r&eacute;guli&eacute;rement pour la maintenance des mat&eacute;riels ? (S&eacute;lectionnez toutes les r&eacute;ponses applicables)?</label>
    <div class="radio-group">
   <label><input type="checkbox" name="choixmultiple" value="Niveau de consommables (exp. : réactifs, consommables jetables)">Niveau de consommables (exp. : r&eacute;actifs, consommables jetables)</label>
 <label><input type="checkbox" name="choix multiple" value="État des capteurs et des instruments de mesure"> &Egrave;tat des capteurs et des instruments de mesure</label>
 <label><input type="checkbox" name="choix multiple" value="Statut des contrats de maintenance"> Statut des contrats de maintenance</label>
 <label><input type="checkbox" name="choix multiple" value="Historique des pannes et des réparations">Historique des pannes et des r&egrave;parations </label>
     <label><input type="checkbox" name="choix multiple" value="Calibrations et vérifications périodiques">Calibrations et v&eacute;rifications p&eacute;riodiques </label>
         <label><input type="checkbox" name="choix multiple" value="Autre">Autre </label>
    
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question5">Question 5: Le sys&egrave;tme de gestion d'activit&eacute; actuel facilite-t-il la communication avec les clients pour la planification des interventions ?</label>
    <div class="radio-group">
       <label><input type="radio" name="reponse5" value="oui">Oui</label>
        <label><input type="radio" name="reponse5" value="non">Non</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question6">Question 6:Quelles t&acirc;ches souhaitez-vous automatiser dans votre travail quotidien en tant que membre du service technique ?</label>
        <textarea id="question6" name="zonetext" required wrap="soft"></textarea>
    </div>



<div class="question-group" style="margin-bottom: 20px;">
    <label for="question7">Question 7:Quelle est votre pr&eacute;f&eacute;rence pour acc&eacute;der au syst&egrave;me de gestion d'activit&eacute;?</label>
    <div class="radio-group">
        <label><input type="radio" name="reponse7" value="Interface web sur ordinateur">Interface web sur ordinateur</label>


        <label><input type="radio" name="reponse7" value="Application mobile dédiée">Application mobile d&eacute;di&eacute;e</label>
        <label><input type="radio" name="reponse7" value="Les deux options">Les deux options</label>
    </div>
</div>

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question8">Question 8: Quels types de rapports aimeriez-vous pouvoir g&eacute;n&eacute;rer a partir du syst&egrave;me ? (S&eacute;lectionnez toutes les r&egrave;ponses applicables)</label>
    <div class="radio-group">
       <label><input type="checkbox" name="choixmultiple2" value="Niveau de consommables (exp. : réactifs, consommables jetables)">Niveau de consommables (exp. : r&eacute;actifs, consommables jetables)</label>
 <label><input type="checkbox" name="choix multiple2" value="Rapports d'interventions réalisées"> Rapports d'interventions r&eacute;alis&eacute;es</label>
 <label><input type="checkbox" name="choix multiple2" value="Statistiques sur les temps d'arrêt des matériels">Statistiques sur les temps d'arr&ecirc;t des mat&eacute;riels</label>
 <label><input type="checkbox" name="choix multiple2" value="Suivi des couts de maintenance">Suivi des couts de maintenance</label>
     <label><input type="checkbox" name="choix multiple2" value="Évaluation de la satisfaction client après intervention">&Egrave;valuation de la satisfaction client apr&eacute;s intervention</label>
          <label><input type="checkbox" name="choix multiple2" value="Suivi des indicateurs de performance (KPIs)">Suivi des indicateurs de performance (KPIs)</label>
          
         <label><input type="checkbox" name="choix multiple2" value="Autre">Autre </label>
    </div>
</div>

<div class="radio-group" style="margin-bottom: 20px;">
    <label for="question9">Question 9:Le syst&eacute;me de gestion d'activit&eacute; actuel garantit-il la s&eacute;curit&eacute; des donn&eacute;es sensibles des clients ?</label>
 <label><input type="radio" name="reponse5" value="oui">Oui</label>
        <label><input type="radio" name="reponse9" value="non">Non</label>
    </div>

  

<div class="question-group" style="margin-bottom: 20px;">
    <label for="question10"> Question 10: Quels sont les &eacute;l&eacute;ments ou fonctionnalit&eacute;s sp&eacute;cifiques que vous aimeriez voir int&eacute;gr&eacute;s dans le syst&egrave;me, mais qui ne sont pas encore pr&eacute;sents ? Veuillez fournir une description d&eacute;taill&eacute;e de vos attentes et besoins</label>
    <textarea id="question10" name="question10" required wrap="soft"></textarea>
</div>



        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

