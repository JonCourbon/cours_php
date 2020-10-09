*****************************************<br/>
LES TESTS CONDITIONNELS<br/>
*****************************************<br/>
Lorsqu'une instruction n'est pas à executer tout le temps => TEST CONDITIONNEL <br/>
Exemple: On stocke l'âge de la personne et on affiche 'Vous êtes majeur' ... si c'est le cas !<br/>
<br/><br/>
   ## SI ## <br/>
Enoncé<br/>
On stocke l'âge de la personne et on affiche 'Vous êtes majeur' ... si c'est le cas !<br/>
Algorithme en pseudo-code<br/>
<pre>
Entier age;
age <-12;
Si(age >= 18)
Alors
   Afficher 'Vous êtes majeur';
Fin Si
</pre>
<br/>Code PHP<br/>
<?php
$age=12;
if($age >= 18){
  echo 'Vous êtes majeur';
}
 ?>
 <br/><br/>
    ## SI .. SINON ## <br/>
 Enoncé<br/>
 On stocke l'âge de la personne et on affiche 'Vous êtes majeur' ou 'Vous êtes mineur'<br/>
 Algorithme en pseudo-code<br/>
 <pre>
 Entier age;
 age <-12;
 Si(age >= 18)
 Alors
    Afficher 'Vous êtes majeur';
 Sinon
    Afficher 'Vous êtes majeur';
 Fin Si
 </pre>
 <br/>Code PHP<br/>
 <?php
 $age=12;
 if($age >= 18){
   echo 'Vous êtes majeur';
 }
 else{
   echo 'Vous êtes mineur';
 }
  ?>

  <br/><br/>
     ## SI .. SINON SI .. ## <br/>
  Enoncé<br/>
  On stocke la moyenne au bac et on affiche la mention<br/>
  Algorithme en pseudo-code<br/>
  <pre>
  Nombre moyennebac;
  moyennebac <-12;
  Si(moyennebac < 10)
  Alors
     Afficher 'Vous êtes recalé';
  Sinon Si (moyennebac < 12) // comme on est dans le Sinon, forcément $moyennebac>=10
     Afficher 'bac obtenu, sans mention';
  Sinon Si (moyennebac < 14) // comme on est dans le Sinon, forcément $moyennebac>=12
     Afficher 'bac obtenu, mention passable';
  Sinon Si (moyennebac < 16) // comme on est dans le Sinon, forcément $moyennebac>=14
     Afficher 'bac obtenu, mention bien';
  Sinon
     Afficher 'bac obtenu, mention très bien';
  Fin Si
  </pre>
  <br/>Code PHP<br/>
  <?php
  $moyennebac=12;
	echo 'Vous avez: '.$moyennebac.': ';
	if($moyennebac<10)
	{
		echo 'vous êtes recalé';
	}
	else if ($moyennebac<12){ // comme on est dans le else, forcément $moyennebac>=10
		echo 'bac obtenu, sans mention';
	}
	else if ($moyennebac<14){
		echo 'bac obtenu, mention passable';
	}
	else if ($moyennebac<16){
		echo 'bac obtenu, mention bien';
	}
	else {
		echo 'bac obtenu, mention très bien';
	}
   ?>
   <br/><br/>
## SI avec conditions multiples ## <br/>
   Enoncé<br/>
   On stocke la taille et le sexe de la personne et on affiche 'Vous êtes grand garçon' pour les garçons de plus de 2m !<br/>
   Algorithme en pseudo-code<br/>
   <pre>
   Entier taillecm;
   Chaine sexe;
   taillecm <-180;
   sexe <- 'M';
   Si( (taillecm> 200) ET (sexe=='M') )
   Alors
      Afficher 'Vous êtes un grand garçon';
   Fin Si
   </pre>
   <br/>Code PHP<br/>
   <?php
   $taillecm=180;
   $sexe='M';
   if( ($taillecm > 200) && ($sexe == 'M') ){
     echo 'Vous êtes un grand garçon';
   }
    ?>
    <br/><br/>
    Enoncé<br/>
    On stocke le nom du département et on affiche 'Vous êtes ligériens/alti-ligériens' si c'est le cas<br/>
    Algorithme en pseudo-code<br/>
    <pre>
    Chaine nomdep;
    nomdep <-'Haute-Loire';
    Si( (nomdep == 'Loire') OU (nomdep=='Haute-Loire') )
    Alors
       Afficher 'Vous êtes ligériens/alti-ligériens';
    Fin Si
    </pre>
    <br/>Code PHP<br/>
    <?php
    $nomdep='Haute-Loire';
    if( ($nomdep=='Loire') || ($nomdep == 'Haute-Loire') ){
      echo 'Vous êtes ligériens/alti-ligériens';
    }
     ?>
     <br/><br/>

 <br/><br/>
 *****************************************<br/>
 EXERCICES À FAIRE<br/>
 *****************************************<br/>
 <br/><br/>
 Enoncé<br/>
 Stocker la valeur d'une temperature. Afficher '** ATTENTION VERGLAS POSSIBLE**' si cette température est infèrieure ou égale à 4 degrés<br/>
 Algorithme en pseudo-code<br/>
 <pre>
 Entier temperature;
 temperature <- 0;
 Si(temperature <=4)
 Alors
    Afficher '** ATTENTION VERGLAS POSSIBLE**';
 Fin Si
 </pre>
 <br/>Code PHP ?<br/>
 <?php
 $temperature=0;
 if($temperature <=4){
   echo '** ATTENTION VERGLAS POSSIBLE**'.'<br/>'."\n";
 }
  ?>

  <br/><br/>
  Enoncé<br/>
  Stocker la valeur d'une temperature (pour la température de son corps). Afficher "tout est normal" ou "vous avez de la fièvre"<br/>
  Algorithme en pseudo-code ?<br/>
  <pre>
  Entier temperature;
  temperature <- 37;
  Si(temperature < 38)
  Alors
     Afficher ' tout est normal ';
  Sinon
    Afficher ' vous avez de la fièvre ';
  Fin Si
  </pre>
  <br/>Code PHP ?<br/>
  <?php
  $temperature=37;
  echo "Vous avez ".$temperature." degrés de température, ";
  if($temperature < 38){
    echo  'tout est normal '.'<br/>'."\n";
  }
  else{
    echo 'vous avez de la fièvre => restez chez vous'.'<br/>'."\n";
  }
   ?>
