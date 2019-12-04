<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPPartie3Exo1Exo2Exo3</title>
  </head>
  <body>
    <?php
      $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
      echo $months[5];
      foreach($months as $elements)
      {
      ?>
      <p><?php echo $elements; ?></p>
    <?php } ?>
  </body>
</html>
