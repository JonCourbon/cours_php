<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Inscription</title>



</head>
<body>

  <?php if(!isset($_SESSION['autentifie']) || $_SESSION['autentifie']!=true): ?>
	Formulaire d'inscription
  <div id="message"><?php
  if(isset($_SESSION['erreur']) && !empty($_SESSION['erreur'])){
    if($_SESSION['erreur']=='utilisateur'):?>
       Cet utilisateur existe déjà. Si c'est vous, essayez de vous connecter avec votre compte <a href="connection.php"><button>Se connecter</button></a><br/>
  <?php endif;
    $_SESSION['erreur']=''; // on efface pour la prochaine fois
  }
  ?></div></div>
  <form action="inscrire.php" method="POST">
    <fieldset>
      <label for="nom">Nom: </label><input type="text" name="nom"/><br/>
      <label for="prenom">Prénom: </label><input type="text" name="prenom"/><br/>
      <label for="email">Email: </label><input type="text" name="email"/><br/>
      <label for="telephone">Téléphone: </label><input type="text" name="telephone"/><br/>
      <label for="datenaissance">Date de naissance: </label><input type="text" name="datenaissance"/><br/>
      <label for="motdepasse">Mot de passe: </label><input type="text" name="motdepasse"/><br/>
      <input type="submit" value="Envoyer"/>
    </fieldset>
  </form>

<?php else: ?>
  Vous êtes déjà connecté, vous n'avez pas à vous inscrire !
<?php endif; ?>
</body>
</html>
