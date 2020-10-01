*****************************************<br/>
LES FONCTIONS<br/>
*****************************************<br/><br/>

## DECLARATION D'UNE FONCTION ## <br/>
Une fonction permet de rassembler des éléments de code que nous réutiliserons plusieurs fois<br/>
Une fonction est déclarée avec le mot-clé function <br/>
Une fonction peut ou non retourner un résultat <br/>
Une fonction peut pendre des arguments (c'est alors leur ordre qui est important)<br/><br/>

## APPEL D'UNE FONCTION ## <br/>
On peut ensuite appeler une fonction via son nom<br/>
<br/>

Fonction avec aucun argument et qui ne retourne rien
<pre>
    function afficherToto(){
      echo "toto";
    }
    afficherToto();
</pre>
<?php
function afficherToto(){
  echo "toto";
}
afficherToto();
 ?>
 <br/>

Fonction avec aucun argument et qui retourne un nombre
<pre>
    function retourner12(){
      return 12;
    }
    $valeur=retourner12();
</pre>
<?php
function retourner12(){
  return 12;
}
$valeur=retourner12();
echo $valeur;
 ?>
 <br/>

Fonction avec un argument et qui ne retourne rien
<pre>
    function afficherNombre($nombre){
      echo $nombre;
    }
    afficherNombre(1987);
</pre>
<?php
function afficherNombre($nombre){
  echo $nombre;
}
afficherNombre(1987);
 ?>
 <br/>

Fonction avec un argument et qui retourne une valeur
<pre>
    function auCarre($nombre){
      return $nombre*$nombre;
    }
    $carre=auCarre(11);
</pre>
<?php
function auCarre($nombre){
  return $nombre*$nombre;
}
$carre=auCarre(11);
echo $carre;
 ?>
 <br/>

 Fonction avec plusieurs arguments
 <pre>
     function afficherSomme($a,$b,$c){ // Les variables $a,$b,$c sont locales à cette fonction
       echo $a+$b+$c;
     }
     afficherSomme(1,2,3);
     $a=10;
     afficherSomme($a,$a,$a); // c'est la place dans les paramètres qui est imporant; ici: il met 10 dans la première variable ($a), 10 dans la seconde ($b), ...
     $a=10;$b=12;$c=13;
     afficherSomme($c,$b,$a);
 </pre>
 <?php
 function afficherSomme($a,$b,$c){ // Les variables $a,$b,$c sont locales à cette fonction
   echo $a+$b+$c;
 }
 afficherSomme(1,2,3);
 $a=10;
 afficherSomme($a,$a,$a); // c'est la place dans les paramètres qui est imporant; ici: il met 10 dans la première variable ($a), 10 dans la seconde ($b), ...
 $a=10;$b=12;$c=13;
 afficherSomme($c,$b,$a);
  ?>
  <br/>

<br/><br/>
*****************************************<br/>
EXERCICES À FAIRE<br/>
*****************************************<br/>
<br/><br/>

Enoncé<br/>
Créer une fonction afficherPremier qui prend deux arguments et qui affiche le premier. Tester la.
<br/>Code PHP ?<br/>
<?php
 ?>

<br/><br/>
Enoncé<br/>
Créer une fonction plusGrand qui prend deux arguments et qui renvoie le plus grand. Tester la.
<br/>Code PHP ?<br/>
<?php
?>
