<?php
/**
 * @title description de l'entité Assure
 * @author  Thierry v
 */
class assure{

// def des propriétés
    private $nom ;
  private $age;
    private $domicile ;
    private $bonusMalus ;


    public function __construct($nom, $age, $domicile){
        //echo "Je suis le constructeur";

        $this ->setNom($nom);
        $this ->setAge($age);
        $this ->setDomicile($domicile);
        $this ->setBonusMalus(0 );
    }


// ensemble des méthodes

    public function avoirAccident(){
      $this -> setBonusMalus(-14);

    }
    public function reglerAssurance(){

        //$this-> bonusMalus  = $this -> bonusMalus + 4;

        $this ->setBonusMalus(4);
    }

    public function parrainer(Assure $parraine){
    //echo "je gagne 10 points de bonus en parrainant !!";

        if($this ->getBonusMalus() >= 10){
            $parraine -> setBonusMalus(10) ;

        }else {
            $parraine-> setBonusMalus(4) ;
        }
    }



    // ensembles des getteur
   public function  getNom(){
     return $this -> nom;
   }

   public function  getAge(){
        return $this -> age;
        }

    public function getDomicile(){
        return $this ->domicile;

    }

    public function getBonusMalus(){
        return $this ->bonusMalus;
    }


    // ensembles de SETTERS
    public function setNom($nom): void {

        if (empty($nom) || ctype_space($nom)){
            trigger_error("Le nom est obligatoire",E_USER_WARNING);
            return;
        }
        $this->nom = $nom;

    }

    public function setAge ($age):void {

        if (empty($age) || ($age < 0 || $age > 130 )){
            trigger_error("L'age est invalide",E_USER_WARNING);
            return;
        }
        $this->age  = $age;
    }

    public function setDomicile($domicile): void {

        if (empty($domicile) || ctype_space($domicile)){
            trigger_error("Le domicile est obligatoire",E_USER_WARNING);
            return;
        }

        $this->domicile = $domicile;

    }

    public function setBonusMalus($bonusMalus): void {

        if (($this->getBonusMalus() + $bonusMalus) <= -50){
            $this ->bonusMalus = -50;

        }elseif (($this -> getBonusMalus() + $bonusMalus) >= 50){
            $this->bonusMalus = 50;
        }else{
            $this ->bonusMalus = $this->getBonusMalus() +$bonusMalus;
        }

      //  $this->bonusMalus = $bonusMalus;

    }



//    public function getBonusMalus(){
//        return $this-> bonusMalus;
//    }

}

