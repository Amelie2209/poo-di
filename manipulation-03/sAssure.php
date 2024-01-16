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
$oAssure03 = new Assure();

// deuxième assuré
$oAssure04 = new Assure();

// assureur 3 (jean) règle son assurance (4 points de bonus malus)
$oAssure03 ->reglerAssurance();
// assureur 3 parraine assureur 04 (patrick) ( 4 points de bonus malus pour assureur 04 (Patrick))
$oAssure03 ->parrainer($oAssure04);

printf("Le pourcentage de bonus-Malus est de %d %% <br> " , $oAssure03 -> getBonusMalus() );
printf("Le pourcentage de bonus-Malus est de %d &percnt;  <br> " , $oAssure04 -> getBonusMalus() );