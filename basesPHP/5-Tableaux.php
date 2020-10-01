*****************************************<br/>
LES FONCTIONS<br/>
*****************************************<br/><br/>

## TABLEAU INDEXE ## <br/>
On accède à une valeur grâce à son indice (attention, ça commence à 0), que ce soit pour affecter ou pour récupérer une valeur<br/>
<pre>
    $tableauI[0]=1;
    $tableauI[1]=10;
    $tableauI[3]=2;
</pre>
On a la fonction count qui retourne le nombre d'éléments du tableau donné en argument <br/>
<pre>
    $nbElements=count($tableauI);
</pre>
On peut afficher les éléments d'un tableau en utilisant une boucle POUR <br/>
<pre>
    for($i=0;$i<$nbElements; $i++){
      echo $tableauI[$i].',';
    }
</pre>
<?php
$tableauI[0]=1;
$tableauI[1]=10;
$tableauI[2]=2;
// ou $tableau=array(1,10,2);
$nbElements=count($tableauI);
for($i=0;$i<$nbElements; $i++){
  echo $tableauI[$i].',';
}
 ?>
 <br/><br/>
 Si un élément n'a pas été rempli (dépassement du nombre d'éléments ou élément manquant), il y a une erreur !!<br/>
 <pre>
   echo $tableauI[10];
 </pre>
 <?php
 echo $tableauI[10];
  ?>
 <br/> <br/>
## TABLEAU ASSOCIATIF ## <br/>
On accède à une valeur grâce à sa clé (une chaîne de caractères), que ce soit pour affecter ou pour récupérer une valeur<br/>
<pre>
    $tableauA["nom"]='COURBON';
    $tableauA["prenom"]='JONATHAN';
</pre>
OU
<pre>
  $tableauA=array(
    "nom"=>'COURBON',
    "prenom"=>'JONATHAN'
  );
</pre>
On a généralement les noms des clés. On peut tout de même parcourir le tableau avec une boucle POUR CHAQUE
<pre>
    foreach($tableauA as $cle=>$val){
      echo 'L\'élément '.$cle.' vaut: '.$val;
    }
</pre>
<?php
$tableauA["nom"]='COURBON';
$tableauA["prenom"]='JONATHAN';
// identique à:
$tableauA=array(
  "nom"=>'COURBON',
  "prenom"=>'JONATHAN'
);
foreach($tableauA as $cle=>$val){
  echo 'L\'élément '.$cle.' vaut: '.$val.'<br/>';
}
 ?>
 <br/> <br/>
 ## TABLEAU BI-DIMENSIONNEL ## <br/>
On peut faire un tableau indexé de tableaux associatifs (exemple: un tableau contenant les noms et prénoms de chaque étudiant) <pre>
 <pre>
   $tableau2D=array(
       array(
         "nom"=>'ETUD 1',
         "prenom"=>'dsdsd'
       ),
       array(
         "nom"=>'ETUD 2',
         "prenom"=>'sdsd'
       )
   );
 </pre>
 On récupère alors le nom du 2ème étudiant avec:
 <pre>
    echo $tableau2D[1]["nom"];
 </pre>
 <?php
 $tableau2D=array(
     array(
       "nom"=>'ETUD 1',
       "prenom"=>'dsdsd'
     ),
     array(
       "nom"=>'ETUD 2',
       "prenom"=>'sdsd'
     )
 );
 echo $tableau2D[1]["nom"];
  ?>
  <br/>
Il n'y a pas d'ordre dans un tableau donc on aurait aussi pu faire:
<pre>
  $tableau2D=array(
      "nom"=> array('ETUD 1','ETUD 2'),
      "prenom"=> array('dsdsd','sdsd')
  );
  echo $tableau2D["nom"][1];
</pre>
<?php
$tableau2D=array(
    "nom"=> array('ETUD 1','ETUD 2'),
    "prenom"=> array('dsdsd','sdsd')
);
echo $tableau2D["nom"][1];
 ?><br/>
 (qui, cependant, est beaucoup moins logique ici)<br/><br/>

 
