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
      <label for="nom">Nom*:</label>
      <input type="text" id="nom" name="nom" required="required"><br/><br/>
      <label for="prenom">Prénom*:</label>
      <input type="text" id="prenom" name="prenom" required="required"><br/><br/>
      <input type="submit" value="Afficher nom et prénom">
    </fieldset>
  </form>

  <h2>Formulaire 2</h2>
  <form action="action2.php" method="GET">
    <fieldset>
      <label for="val1">Nombre 1*:</label>
      <input type="text" id="val1" name="val1" required="required"><br/><br/>
      <label for="val2">Nombre 2*:</label>
      <input type="text" id="val2" name="val2" required="required"><br/><br/>
      <input type="submit" value="Calculer et afficher la somme">
    </fieldset>
  </form>

  <h2>Formulaire 3</h2>
  <form action="action3.php" method="GET">
    <fieldset>
      <label for="val1">Note 1:</label>
      <input type="text" id="val1" name="note1"><br/><br/>
      <label for="val2">Note 2:</label>
      <input type="text" id="val2" name="note2"><br/><br/>
      <label for="val2">Note 3:</label>
      <input type="text" id="val3" name="note3"><br/><br/>
      <input type="submit" value="Calculer et afficher la moyenne"><br/></br>
      (laisser le champ vide si pas de note)
    </fieldset>
  </form>

  <h2>Formulaire 4</h2>
  <form action="action4.php" method="GET">
    <fieldset>
      <label for="val">Notes étudiant 1*:</label>
      <input type="text" id="val1" name="val1_1" placeholder="val1" required="required">
      <input type="text" id="val2" name="val2_1" placeholder="val2" required="required">
      <input type="text" id="val3" name="val3_1" placeholder="val3" required="required"><br/><br/>
      <label for="val">Notes étudiant 2*:</label>
      <input type="text" id="val1" name="val1_2" placeholder="val1" required="required">
      <input type="text" id="val2" name="val2_2" placeholder="val2" required="required">
      <input type="text" id="val3" name="val3_2" placeholder="val3" required="required"><br/><br/>
      <input type="submit" value="Afficher les moyennes">
    </fieldset>
  </form>


  <h2>Formulaire 5</h2>
  <form action="action5.php" method="GET">
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
