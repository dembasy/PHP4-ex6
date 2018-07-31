<?php
// defintion de la fonction qui servira a y stocker nos varibale et a les reutiliser dans notre phrase
  function intro($firstName, $lastName, $age){
    // retour de la phrase plus concaténation des différentes variables
    return 'Bonjour '. $lastName. ' '. $firstName. ' tu as '. $age. ' ans.';
  };
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
      // affichage 
        echo intro('Theo', 'Skrud', 21)
       ?>
    </p>
  </body>
</html>
