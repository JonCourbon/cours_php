<?php
// chaque produit est représenté par un objet

class Produit {
      var $reference;
      var $prix;
      var $categorie;
      // constructeur
      function __construct( $par1, $par2, $par3 ) {
         $this->reference = $par1;
         $this->prix = $par2;
         $this->categorie = $par3;
      }
    }

// qui est mis dans le tableau indéxé $tableauProduits

$tableauProduits=array();

// produit 0
$produit=new Produit("Appareil Photo1", 490, "photo");
array_push($tableauProduits,$produit);

// produit 1
$produit=new Produit("Caméra studio",1200, "video");
array_push($tableauProduits,$produit);

// produit 2
$produit=new Produit("Appareil Photo2",439, "photo");
array_push($tableauProduits,$produit);

// cette solution permet d'être assez adaptable si on recupère les données de chaque produit un par un, par exemple en lisant un fichier

var_dump($tableauProduits);

echo "\n<br/>la référence du 3ème produit est: ".$tableauProduits[2]->reference;

 ?>
