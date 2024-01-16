<?php
require_once 'assure.php';


//$oAssure01 = new Assure();
//var_dump($oAssure01);
//echo "L'objet \$oAssure est de type : " .gettype($oAssure01) ."<br>";
////echo $oAssure ->age = $oAssure01 -> age + 2;
//
////$oAssure01 -> reglerAssurance();
//var_dump($oAssure01);
//
//$oAssure02 = new Assure();
//$oAssure02 -> reglerAssurance();
////var_dump($oAssure02);
//printf("Le pourcentage de bonus-Malus est de %d %% <br> " , $oAssure02 -> getBonusMalus() );
//printf("Le pourcentage de bonus-Malus est de %d &percent
// <br> " , $oAssure02 -> getBonusMalus() );

// premier assuré
//$jean = new Assure();
//$jean -> setNom( "jean");
//
//echo $jean -> getNom();
//$jean = new Assure();
//$jean -> setAge( " ");
//
//echo $jean -> getAge(50);


$o = new Assure();
$p =  new Assure();

$o -> reglerAssurance();
$o -> parrainer($p);
$o-> avoirAccident();
$p->reglerAssurance();

printf("Le pourcentage de bonus-Malus est de %d %% <br> " , $o-> getBonusMalus() );
printf("Le pourcentage de bonus-Malus est de %d &percnt; <br> " , $p-> getBonusMalus()  );


// deuxième assuré
//$patrick= new Assure();
//
//// assureur 3 (jean) règle son assurance (4 points de bonus malus)
//$jean ->reglerAssurance();
//// assureur 3 parraine assureur 04 (patrick) ( 4 points de bonus malus pour assureur 04 (Patrick))
//$jean ->parrainer($patrick);
//
//printf("Le pourcentage de bonus-Malus est de %d %% <br> " , $jean -> getBonusMalus() );
//printf("Le pourcentage de bonus-Malus est de %d &percnt;  <br> " , $patrick -> getBonusMalus() );