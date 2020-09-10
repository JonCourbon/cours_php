<?php
// on peut aussi faire un tableau associatif de tableaux indexés (l'indice= le no de l'appareil)

$tableauProduits=array();

// produit 0
$tableauProduits["reference"][0]= "Appareil Photo1";
$tableauProduits["reference"][1]= "Caméra studio";
$tableauProduits["reference"][2]= "Appareil Photo2";


$tableauProduits["prix"][0]= 490;
$tableauProduits["prix"][1]= 1200;
$tableauProduits["prix"][2]= 439;


$tableauProduits["categorie"][0]= "photo";
$tableauProduits["categorie"][1]= "video";
$tableauProduits["categorie"][2]= "photo";

/* cette solution fonctionne mais:
- elle est  moins logique car l'ajout d'un autre produit implique plusieurs lignes à ajouter, à différens endroits
- de plus, cela implique de redimensionner chacun des 3 tablaux
*/

var_dump($tableauProduits);

echo "\n<br/>la référence du 3ème produit est: ".$tableauProduits["reference"][2];

 ?>
