*****************************************<br/>
LES BOUCLES ITERATIVES<br/>
*****************************************<br/>
Lorsqu'une instruction se répète plusieurs fois => BOUCLES ITERATIVES <br/>
Lorsque l'on sait combien de fois cela se répète => BOUCLES POUR <br/>
Lorsque l'on NE sait PAS combien de fois cela se répète => BOUCLES TANT QUE (il faut une condition de fin) <br/>
<br/><br/>

## BOUCLE POUR ## <br/>
Enoncé<br/>
Afficher 10 étoiles successivement<br/>
Algorithme en pseudo-code<br/>
<pre>
Entier compteur;
Pour(compteur de 0 à 10 non compris pas de 1) // compteur commencera à 0 puis s'incrémentera: 1, 2, .... et s'arretera à 9 compris (0 à 9 => 10 itérations)
  Afficher '*';
Fin Pour
</pre>
<br/>Code PHP<br/>
<?php
for($compteur=0;$compteur<10;$compteur++){
  echo '*';
}
?>
<br/><br/>

## BOUCLE TANT QUE ## <br/>
Enoncé<br/>
Afficher des étoiles. On s'arretera quand un nombre aléatoire (entre 0 et 20) sera plus petit que 10.<br/>
Algorithme en pseudo-code<br/>
<pre>
Entier nombreAleatoire;
nombreAleatoire <- 20 // il faut donner une valeur à ce qui va être dans le TANT QUE pour pouvoir rentrer dans la boucle
Tant que(nombreAleatoire >= 10 )
  Afficher '*';
  nombreAleatoire <- genererNombreAleatoire(); // il faut mettre à jour la valeur sinon la boucle est infinie, on ne sortira jamais
Fin Tant que
</pre>
<br/>Code PHP<br/>
<?php
$nombreAleatoire=20;
while($nombreAleatoire >= 10){
  echo '*';
  $nombreAleatoire=rand(0,20);
}
?>
<br/><br/>

<br/><br/>
*****************************************<br/>
EXERCICES À FAIRE<br/>
*****************************************<br/>
<br/><br/>
Enoncé<br/>
Stocker la valeur correspondant au nombre d'étoiles que l'on veut dans une variable. Afficher ces étoiles successivement<br/>
<br/>
Algorithme en pseudo-code<br/>
<pre>
  Entier compteur, nombreEtoiles;
  nombreEtoiles<- 20;
  Pour(compteur de 0 à nombreEtoiles non compris pas de 1)
    Afficher '*';
  Fin Pour
</pre>
<br/>Code PHP ?<br/>
<?php
 ?>

 <br/><br/>
 Enoncé<br/>
 Afficher 20 étoiles successives<br/>
 <br/>
 Algorithme en pseudo-code<br/>
 <pre>
   Entier compteur;
   Pour(compteur de 0 à 10 non compris pas de 1) // compteur commencera à 0 puis s'incrémentera: 1, 2, .... et s'arretera à 9 compris (0 à 9 => 10 itérations)
     Afficher '*';
   Fin Pour
 </pre>
 <br/>Code PHP ?<br/>
 <?php
  ?>

  <br/><br/>
  Enoncé<br/>
  Afficher 20 étoiles successives, sur 4 lignes successives<br/>
  <br/>
  Algorithme en pseudo-code<br/>
  <pre>
    // point de départ: une ligne = on répète de faire des étoiles, plusieurs lignes = on repère de faire une ligne
    Entier ligne,compteur;
    Pour(ligne de 0 à 4 non compris pas de 1)
      Pour(compteur de 0 à 10 non compris pas de 1)
        Afficher '*';
      Fin Pour
      Afficher 'saut de ligne';
    Fin Pour
  </pre>
  COncernant le saut de ligne: quand on fait un echo en PHP, le saut de lignes est '\n'; c'est donc ce qu'il faut utiliser si le HTML généré est dans une balise "pre" (sinon "br"); à mettre dans un echo
  <br/>Code PHP ?<br/>
  <?php
   ?>

   <br/><br/>
   Enoncé<br/>
   Stocker un nombre dans une variable. Faire un "carré" avec ce nombre d'étoile par ligne et ce nombre de ligne<br/>
   Exemple pour 4: <br/>
   <pre>
     ****
     ****
     ****
     ****
   </pre>
   <br/>
   Algorithme en pseudo-code ??<br/>
   <pre>
   </pre>
   <br/>Code PHP ?<br/>
   <?php
    ?>

    <br/><br/>
    Enoncé<br/>
    Stocker un nombre dans une variable. Faire un "carré" avec des étoiles sur les bords uniquement<br/>
    Exemple pour 4: <br/>
    <pre>
      ****
      *  *
      *  *
      ****
    </pre>
    Indice: des fois on affiche * et des fois un espace (=> SI)<br/>
    Algorithme en pseudo-code ??<br/>
    <pre>
    </pre>
    <br/>Code PHP ?<br/>
    <?php
     ?>

     <br/><br/>
     Enoncé<br/>
     Stocker un nombre dans une variable. Faire un "escalier" avec des étoiles<br/>
     Exemple pour 4: <br/>
     <pre>
       *
       **
       ***
       ****
     </pre>
     Indice: sur la premiere ligne, on affiche 1 étoile, sur la 2ème : 2, sur la Neme, N<br/>
     Algorithme en pseudo-code ??<br/>
     <pre>
     </pre>
     <br/>Code PHP ?<br/>
     <?php
      ?>
