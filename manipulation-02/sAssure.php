<?php
require_once 'assure.php';
$oAssure = new Assure();
var_dump($oAssure);
echo "L'objet \$oAssure est de type : " .getType($oAssure) ."<br>";
echo $oAssure ->age = $oAssure -> age + 2;
var_dump($oAssure);
$oAssure -> parrainer();

}
