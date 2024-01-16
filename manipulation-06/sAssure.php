<?php
require_once 'assure.php';

//echo Assure::getInformation();
//echo "La carte argent onbtenue avec ". Assure::OR ."points <br>";
//
//
//
////premier assuré
//$o = new Assure('Toto',15, 'PARIS');
//
//var_dump( $o);
//
//$p = new Assure('Tarzan',18, 'PARIS');
//var_dump($p);


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


//$o = new Assure();
//$p =  new Assure();
//
//$o -> reglerAssurance();
//$o -> parrainer($p);
//$o-> avoirAccident();
//$p->reglerAssurance();
//
//printf("Le pourcentage de bonus-Malus est de %d %% <br> " , $o-> getBonusMalus() );
//printf("Le pourcentage de bonus-Malus est de %d &percnt; <br> " , $p-> getBonusMalus()  );
//

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

$oAssure01 = new Assure('X',26,'Paris');
$oAssure02 = new Assure('Y',38,'Toulouse');

$oAssure01->reglerAssurance();
$oAssure01->parrainer($oAssure02);

$oAssure02->avoirAccident();
$oAssure02->reglerAssurance();

$oAssure01-> setBonusMalus(20);
$oAssure01-> setPointFidelite(20);
$oAssure01->reglerAssurance();

echo "Le nombre de points fidélité de  \$oAssure01 est : ".$oAssure01->getPointFidelite() . "points <br>";
echo "Le nombre de points fidélité de \$oAssure02 est : ".$oAssure02->getPointFidelite() . "points <br>";

echo "le niveau de bonusMalus de \$oAssure01 est : " . $oAssure01->getBonusMalus() ."% .<br>";
echo "le niveau de bonusMalus de \$oAssure02 est : " . $oAssure02->getBonusMalus() ."% .<br>";

