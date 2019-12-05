<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPPartie3Exo1Exo2Exo3</title>
  </head>
  <body>
    <?php
      $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
      /*autre possibilité de code:
      $months = array;
      $months = [0];
      $months = [1]; ect...*/
      echo $months[5];
      //Pour chauqe éléments du tableau mois, on affiche ses éléments
      foreach($months as $elements)
      {
      ?>
      <!--Pour positionner les éléments les uns en dessous des autres:-->
      <p><?php echo $elements; ?></p>
    <?php } ?>
  </body>
</html>
