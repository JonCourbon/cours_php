<?php
session_start();

// ceci est le script permettant d'inscrire la personne dans la base de données et qui redirige vers les différentes pages en fonction des cas
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];

// on essaie d'ajouter l'utilisateur dans la base de données

/* pour cet exemple, on suppose que jp@gmail.com existe déjà dans la base et donc il y a une erreur */
if($email!="jp@gmail.com"){
  $_SESSION['autentifie']=true;
  $_SESSION['email']=$email; // pour l'identifiant de l'utilisateur si besoin dans la suite
  $_SESSION['message']='Bienvenue '.$prenom.' '.$nom.', cela fait 3 jours que vous n\'étiez pas venu';
  header('Location: index.php');
  exit;
}
else{
  $_SESSION['autentifie']=false;
  $_SESSION['erreur']='utilisateur';
  $_SESSION['donneessaisies']=$_POST;
  header('Location: inscription.php');
  exit;
}

// si tout s'est bien passé, on redirige vers la page index.php

 ?>
