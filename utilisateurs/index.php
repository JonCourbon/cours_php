<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Super site</title>



</head>
<body>
	Vous êtes sur notre site communautaire<br/><br/>

<div id="identite">
  <?php if(isset($_SESSION['autentifie']) && $_SESSION['autentifie']==true){
    echo $_SESSION['message'];
  }
  ?>
  </div>
  <div>
    <?php if(!isset($_SESSION['autentifie']) || $_SESSION['autentifie']!=true): ?>
      <a href="inscription.php"><button>S'inscrire</button></a><br/>
      <a href="connexion.php"><button>Se connecter avec son compte</button></a><br/>
    <?php else: ?>
      <a href="deconnecter.php"><button>Me déconnecter</button></a><br/>
      <a href="changermdp.php"><button>Changer mon mot de passe</button></a><br/>
      <a href="desabonnement.php"><button>Me désabonner de la newsletter</button></a><br/>
      <a href="desinscription.php"><button>Me désinscrire</button></a><br/>
    <?php endif; ?>
  </div>

</body>
</html>
