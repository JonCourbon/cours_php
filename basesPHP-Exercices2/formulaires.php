<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Exercices formulaire</title>



</head>
<body>

  <h2>Formulaire 1</h2>
  <form action="action1.php" method="GET">
    <fieldset>
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom"><br><br>
      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom"><br><br>
      <input type="submit" value="Afficher nom et prénom">
    </fieldset>
  </form>

  <h2>Formulaire 2</h2>
  <form action="action2.php" method="GET">
    <fieldset>
      <label for="val1">Nombre 1:</label>
      <input type="text" id="val1" name="val1"><br><br>
      <label for="val2">Nombre 2:</label>
      <input type="text" id="val2" name="val2"><br><br>
      <input type="submit" value="Calculer et afficher la somme">
    </fieldset>
  </form>

  <h2>Formulaire 3</h2>
  <form action="action3.php" method="GET">
    <fieldset>
      <label for="val">Notes étudiant 1:</label>
      <input type="text" id="val1" name="val1_1" placeholder="val1">
      <input type="text" id="val2" name="val2_1" placeholder="val2">
      <input type="text" id="val3" name="val3_1" placeholder="val3"><br><br>
      <label for="val">Notes étudiant 2:</label>
      <input type="text" id="val1" name="val1_2" placeholder="val1">
      <input type="text" id="val2" name="val2_2" placeholder="val2">
      <input type="text" id="val3" name="val3_2" placeholder="val3"><br><br>
      <input type="submit" value="Afficher les moyennes">
    </fieldset>
  </form>

  <h2>Formulaire 4</h2>
  <form action="action4.php" method="GET">
    <fieldset>
      <label for="vehicules">Marques de vos véhicules:</label><br/>
      <select name="vehicules" multiple="multiple">
        <option value="renault">RENAULT</option>
        <option value="peugeot">PEUGEOT</option>
        <option value="toyota">TOYOTA</option>
        <option value="seat">SEAT</option>
      </select><br/>
      <input type="submit" value="Afficher les marques">
    </fieldset>
  </form>
</body>
</html>
