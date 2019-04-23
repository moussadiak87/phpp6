<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 - Partie 6 PHP</title>
</head>
<body>
  <h1>Exercice 6 - Partie 6 PHP</h1>
  <?php
  if(isset($_GET['building']) && isset($_GET['room'])) { ?>
  <p><?= $_GET['building'] . ' ' . $_GET['room']?></p><?php
  } else {
      echo ' Veuillez entrer un paramétre valide';
  }
  ?>
</body>
</html>