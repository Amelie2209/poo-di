<?php
/**
 * @title description de l'entité Assure
 * @author  Thierry v
 */
class assure{
    private $nom = "Thierry";
  public $age = 34;
    private $domicile = "Chatearoux";
    private $bonusMalus = 0;

    public function avoirAccident(){

    }
    public function reglerAssurance(){

        $this-> bonusMalus  = $this -> bonusMalus + 4;
    }
    public function parrainer(Assure $parraine){
    //echo "je gagne 10 points de bonus en parrainant !!";

        if($this ->getBonusMalus() >= 10){
            $parraine -> bonusMalus= 10;

        }else {
            $parraine-> bonusMalus = 4;
        }
    }

    public function getBonusMalus(){
        return $this-> bonusMalus;
    }

}

