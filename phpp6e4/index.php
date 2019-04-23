<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4 - Partie 6 PHP</title>
</head>
<body>
  <h1>Exercice 4 - Partie 6 PHP</h1>
  <?php
  if(isset($_GET['language']) AND isset($_GET['server'])) { ?>
  <p><?= $_GET['language'] . ' ' . $_GET ['server'] ?></p><?php
  } else {
      echo ' Veuillez entrer un paramétre valide';
  }
  ?>
</body>
</html>