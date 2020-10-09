*****************************************<br/>
PREAMBULE<br/>
*****************************************<br/>
- Ne pas mettre d'accent, espace, caractères spéciaux dans les noms de fichiers, noms de variables, noms de fonction !!! <br/>
- Utiliser des noms explicites pour vos fichiers, variables, fonctions <br/>
- Utiliser des sauts de lignes, indenter votre code (=> meilleure lisibilité et plus facile de trouver les erreurs)<br/><br/>

*****************************************<br/>
LES VARIABLES<br/>
*****************************************<br/>
<br/><br/>
<?php
// le code à interpréter doit être dans les balises <?php
/*
Déclaration et affectation d'une variable; affichage
Entier A;
A <- 10;
Afficher A;
*/
$A=10; // pas de déclaration en PHP
echo $A;

/*
Ecrasement des valeurs
*/
$A=10;
echo $A;
$A=12;
echo $A; // on n'a plus accès à la précédente valeur

/*
Opération sur les nombres
*/
$B=$A+1;
$C=$A+$A;
$D=$A*$A;

/*
Chaine texte;
texte <- "Bonjour";
Afficher texte;
*/
$texte='Bonjour'; // on peut utiliser les ' ou les "  autour d'un texte. Privilégiez toujours la même solution
echo $texte;

/*
Opérations sur les chaînes: concénation
*/
$texte2=$texte.' Jean Pierre'; // => Bonjour Jean Pierre
$texte3=$texte.' Jean Pierre'.' comment vas-tu ?'; // => Bonjour Jean Pierre comment vas-tu ?


/*
TABLEAU INDEXE (-> il y a un nombre comme indice de la case;  !! commence à 0 !)
Tableau tab;
tab[0] <- 1;
tab[1] <- 1;
tab[2] <- 1;
Afficher tab;
Afficher taille(tab);
*/
$tab=array(); // non obligatoire
$tab[0]=1;
$tab[1]=1;
$tab[2]=1;
print_r($tab); // on ne peut pas afficher un tableau avec un echo.
echo count($tab);

/*
TABLEAU ASSOCIATIF (-> chaque case possède une clé et une valeur (la clé permet d'accéder à la valeur)
Tableau tab;
tab['nom'] <- 'COURBON';
tab['prenom'] <- 'JONATHAN';
Afficher tab['nom']; // le nom
*/
$tab=array(
  'nom' => 'COURBON',
  'prenom' => 'JONATHAN'
);
echo $tab['nom'];
?>

<br/><br/>
*****************************************<br/>
EXERCICES À FAIRE<br/>
*****************************************<br/>
<br/><br/>
Enoncé<br/>
Stocker la valeur de 3 nombres entiers (A, B, C). Calculer puis afficher la somme. Calculer puis afficher la moyenne.<br/>
Algorithme en pseudo-code<br/>
<pre>
Entier A, B, C;
A<- 10; B<-20; C<- 12;
Entier somme;
somme <- A+B+C;
Afficher somme;
Nombre moyenne;
moyenne <- somme/3;
Afficher moyenne;
</pre>
<br/>Code PHP ?<br/>
<?php
$A=10; $B=20; $C=12;
$somme = $A+$B+$C;
echo 'Somme:'.$somme.'<br/>'."\n";
$moyenne = $somme/3;
echo 'Moyenne:'.$moyenne.'<br/>'."\n";
 ?>

 <br/><br/>
 Enoncé<br/>
 Stocker le nom et le prénom de la personne dans 2 variables. Afficher le nom. Afficher le prénom concaténé avec le nom (Jonathan COURBON)<br/>
 Algorithme en pseudo-code<br/>
 <pre>
 Chaine nom, prenom;
 nom <- "Courbon";
 prenom <- "Jonathan";
 Afficher nom;
 Afficher prenom.' '.nom;
 </pre>
 <br/>Code PHP ?<br/>
 <?php
 $nom = "Courbon";
 $prenom = "Jonathan";
 echo $nom."\n";
 echo $prenom.' '.$nom."\n";
  ?>

  <br/><br/>
  Enoncé<br/>
  Stocker la valeur de 2 nombres entiers (A, B). Afficher la valeur de chaque variable. Inverser les valeurs et afficher.<br/>
  Algorithme en pseudo-code<br/>
  <pre>
  Entier A, B;
  A<-10;
  B<-14;
  Afficher "A=".A;
  Afficher "B=".B;
  Entier C; // on a besoin d'une 3ème variable car si on fait A<-B; on n'a plus la valeur qui était dans A initiallement
  C<-A; // on stocke dans une variable ce qu'il y a dans A
  A<-B; // A est écrasé, on lui affecte le contenu de B
  B<-C; // on affecte à B le contenu de C (qui était la valeur de A au début)
  Afficher "A=".A;
  Afficher "B=".B;
  </pre>
  <br/>Code PHP ?<br/>
  <?php
  $A=10;
  $B=14;
  echo "A=".$A.'<br/>'."\n";
  echo "B=".$B.'<br/>'."\n";
  $C=$A;
  $A=$B;
  $B=$C;
  echo "A=".$A.'<br/>'."\n";
  echo "B=".$B.'<br/>'."\n";
   ?>
