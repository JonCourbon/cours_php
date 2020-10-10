<?php
$somme=0;
$nombrenotes=0;

// modifications à faire: prendre en compte que des notes peuvent ne pas avoir été saisies !

$somme=$somme+$_GET["note1"];
$nombrenotes++;

$somme=$somme+$_GET["note2"];
$nombrenotes++;

$somme=$somme+$_GET["note3"];
$nombrenotes++;

// modifications à faire: prendre en compte la situation où aucune note n'a été saisie
$moyenne=$somme/$nombrenotes;

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Action 3: moyenne</title>



</head>
<body>
La moyenne de l'étudiant est: <?php echo $moyenne; ?>
</body>
</html>
