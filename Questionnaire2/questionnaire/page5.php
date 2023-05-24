<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire - Département Commercial</title>
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
            text-align:center;
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
            display: flex;
            align-items: center;
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






    <h1>Questionnaire - D&eacute;partement Commercial</h1>
    <form method="POST" action="traitementcommercial.php">
        <div class="question-group">
            <h2>Question 1 :</h2>
            <label for="question1">Utilisez-vous le syst&eacute;me de gestion des activit&eacute;s de test pour suivre et g&eacute;rer les opportunit&eacute;s commerciales ?</label>
             <label for="question1"><input type="radio" id="question1" name="question1" value="Oui" required> Oui</label>
            <label for="question1"><input type="radio" id="question1" name="question1" value="Non" required> Non</label>
        </div>

        <div class="question-group">
            <h2>Question 2 :</h2>
            <label for="question2">Dans quelle mesure &eacute;valuez-vous l'efficacit&eacute; du syst&egrave;me de gestion des activit&eacute;s  pour la gestion des contacts clients et des donn&eacute;es commerciales ?</label>
           
            
            <select id="question2" name="question2" required>
                                                <option value="">Veuillez choisir une r&eacute;ponse...</option>
                
                <option value="Tr&egrave;s efficace">Tr&egrave;s efficace</option>
                <option value="Efficace">Efficace</option>
                <option value="Moyennement efficace">Moyennement efficace</option>
                <option value="Peu efficace">Peu efficace</option>
                <option value="Pas du tout efficace">Pas du tout efficace</option>
            </select> 
            
        </div>

  <div class="question-group">
            <h2>Question 3 :</h2>
            <label for="question3">Utilisez-vous le syst&egrave;me pour la planification des visites commerciales ?</label>
            <label for="question3"><input type="radio" id="question3" name="question3" value="Oui" required> Oui</label>
            <label for="question3"><input type="radio" id="question3" name="question3" value="Non" required> Non</label>
        </div>
        
      
      <div class="question-group">
            <h2>Question 4 :</h2>
            <label for="question4">A quel point &eacute;valuez-vous l'efficacit&eacute; du syst&egrave;me pour la gestion des taches commerciales ?</label>
            
            <select id="question4" name="question4" required>
                                                <option value="">Veuillez choisir une r&eacute;ponse...</option>
                
                <option value="Tr&egrave;s efficace">Tr&egrave;s efficace</option>
                <option value="Efficace">Efficace</option>
                <option value="Moyennement efficace">Moyennement efficace</option>
                <option value="Peu efficace">Peu efficace</option>
                <option value="Pas du tout efficace">Pas du tout efficace</option>
            </select>
            
            
        </div>

        <div class="question-group">
            <h2>Question 5 :</h2>
            <label for="question5">Utilisez-vous le syst&egrave;me de gestion des activit&eacute;s de test pour la vente aux clients ?</label>
             <label for="question5"><input type="radio" id="question5" name="question5" value="Oui" required> Oui</label>
            <label for="question5"><input type="radio" id="question5" name="question5" value="Non" required> Non</label>
        </div>
            
 
        
        
        <div class="question-group">
    <h2>Question 6 :</h2>
    <label for="question6">Dans quelle mesure &eacute;valuez-vous l'efficacit&eacute; du syst&egrave;me pour la gestion des projets commerciaux ?</label>
    <label><input type="checkbox" name="question6" value="tres_efficace" onchange="uncheckOtherCheckboxes(this)">Tr&egrave;s efficace</label>
    <label><input type="checkbox" name="question6" value="efficace" onchange="uncheckOtherCheckboxes(this)">Efficace</label>
    <label><input type="checkbox" name="question6" value="moyennement_efficace" onchange="uncheckOtherCheckboxes(this)">Moyennement efficace</label>
    <label><input type="checkbox" name="question6" value="peu_efficace" onchange="uncheckOtherCheckboxes(this)">Peu efficace</label>
    <label><input type="checkbox" name="question6" value="pas_efficace" onchange="uncheckOtherCheckboxes(this)">Pas du tout efficace</label>
</div>

<script>
function uncheckOtherCheckboxes(currentCheckbox) {
  var checkboxes = document.getElementsByName('question6');
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i] !== currentCheckbox) {
      checkboxes[i].checked = false;
    }
  }
}
</script>

        <div class="question-group">
            <h2>Question 7 :</h2>
            <label for="question7">Utilisez-vous ce syst&egrave;me pour l'assistance clients ?</label>
           <label for="question7"><input type="radio" id="question7" name="question7" value="Oui" required> Oui</label>
            <label for="question7"><input type="radio" id="question7" name="question7" value="Non" required> Non</label>
        </div>
            

   
   
  
        <div class="question-group">
            <h2>Question 8 :</h2>
            <label for="question8">Utilisez-vous le syst&egrave;me  pour les pr&eacute;sentations et la validation des commandes ?</label>
            <label for="question8"><input type="radio" id="question8" name="question8" value="Oui" required> Oui</label>
            <label for="question8"><input type="radio" id="question8" name="question8" value="Non" required> Non</label>
        </div>
            

<div class="question-group">
            <h2>Question 9:</h2>
             <label for="question9">Question 9: Quelles sont les taches manuelles que vous souhaitez automatiser ?</label>
    <textarea id="question9" name="question9" required wrap="soft"></textarea>
</div>
            

           <div class="question-group">
            <h2>Question 10 :</h2>
            <label for="question10">A quelle point &eacute;valuez-vous l'efficacit&eacute; du systeme dans les pr&eacute;sentations et la validation des commandes ?</label>
           <label><input type="checkbox" name="question6" value="tres_efficace" onchange="uncheckOtherCheckboxes(this)">Tr&egrave;s efficace</label>
    <label><input type="checkbox" name="question10" value="efficace" onchange="uncheckOtherCheckboxes(this)">Efficace</label>
    <label><input type="checkbox" name="question10" value="moyennement_efficace" onchange="uncheckOtherCheckboxes(this)">Moyennement efficace</label>
    <label><input type="checkbox" name="question10" value="peu_efficace" onchange="uncheckOtherCheckboxes(this)">Peu efficace</label>
    <label><input type="checkbox" name="question10" value="pas_efficace" onchange="uncheckOtherCheckboxes(this)">Pas du tout efficace</label>
</div>

<script>
function uncheckOtherCheckboxes(currentCheckbox) {
  var checkboxes = document.getElementsByName('question10');
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i] !== currentCheckbox) {
      checkboxes[i].checked = false;
    }
  }
}
</script>


        <div class="question-group">
            <h2>Question 11 :</h2>
            <label for="question11">Avez-vous des suggestions ou des commentaires suppl&eacute;mentaires sur le syst&egrave;me de gestion des activit&eacute;s ?</label>
            <textarea id="question11" name="question11" rows="4"></textarea>
        </div>

 

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
