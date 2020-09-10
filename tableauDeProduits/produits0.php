<?php
// chaque produit est représenté par un tableau indéxé $tableauProduits de tableaux associatifs

$tableauProduits=array();

// produit 0
$tableauProduits[0]["reference"]= "Appareil Photo1";
$tableauProduits[0]["prix"]= 490;
$tableauProduits[0]["categorie"]= "photo";

// produit 1
$tableauProduits[1]["reference"]= "Caméra studio";
$tableauProduits[1]["prix"]= 1200;
$tableauProduits[1]["categorie"]= "video";

// produit 2
$tableauProduits[2]["reference"]= "Appareil Photo2";
$tableauProduits[2]["prix"]= 439;
$tableauProduits[2]["categorie"]= "photo";

// cette solution est simple cependant si on ne veut plus mettre le 2ème produit, il faut changer l'indice partout ensuite

/* alternative, ajouter un $indice
$indice = 0;
// produit
$tableauProduits[$indice]["reference"]= "Appareil Photo1";
$tableauProduits[$indice]["prix"]= 490,
$tableauProduits[$indice]["categorie"]= "photo");
$indice++;
// produit suivant ....
*/

var_dump($tableauProduits);

echo "\n<br/>la référence du 3ème produit est: ".$tableauProduits[2]["reference"];

 ?>
