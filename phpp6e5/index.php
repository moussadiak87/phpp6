<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 - Partie 6 PHP</title>
</head>
<body>
  <h1>Exercice 5 - Partie 6 PHP</h1>
  <?php
  if(isset($_GET['week'])) { ?>
  <p><?= $_GET['week']?></p><?php
  } else {
      echo ' Veuillez entrer un paramétre valide';
  }
  ?>
</body>
</html>