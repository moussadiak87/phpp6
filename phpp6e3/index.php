<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP Partie 6 Exercice 3</title>
</head>
<body>
  <h1>Partie 6 Exercice 3</h1>
  <?php
  if(isset($_GET['startDate']) AND isset($_GET['endDate'])){
    ?>
    <p><?= $_GET['startDate']. ' ' .$_GET['endDate'] ?></p>
     <?php }
    else {
        echo 'Afficher un paramétre valide !';
    }
  ?>
</body>
</html>