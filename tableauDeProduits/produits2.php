<?php
// chaque produit est représenté par un tableau associatif
// qui est mis dans le tableau indéxé $tableauProduits

$tableauProduits=array();

// produit 0
$produit=array("reference"=> "Appareil Photo1", "prix"=> 490, "categorie"=> "photo");
array_push($tableauProduits,$produit);

// produit 1
$produit=array("reference"=> "Caméra studio", "prix"=> 1200, "categorie"=> "video");
array_push($tableauProduits,$produit);

// produit 2
$produit=array("reference"=> "Appareil Photo2", "prix"=> 439, "categorie"=> "photo");
array_push($tableauProduits,$produit);

// cette solution permet d'être assez adaptable si on recupère les données de chaque produit un par un, par exemple en lisant un fichier

var_dump($tableauProduits);

/*
on peut aussi faire sans passer par la variable intermédiaire $produit
array_push($tableauProduits,array("reference"=> "Appareil Photo1", "prix"=> 490, "categorie"=> "photo"));
*/

echo "\n<br/>la référence du 3ème produit est: ".$tableauProduits[2]["reference"];

 ?>
