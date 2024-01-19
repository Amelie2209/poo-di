<?php
/**
 * @title description de l'entité Assure
 * @author  Thierry v
 */
class Assure{

// def des propriétés
    private $nom ;
  private $age;
    private $domicile ;
    private $bonusMalus ;

    private  $pointFidelite ;

    private $idAssure;



// la valeur d'un attributs statiques est identiques pour l'ensemble des objets
// les membres sont accessonles sont avoir extencier la classe
// il n'est pas possible d'acceder à un attribut sta par un objet

  private static $information = "Les avantages pour tout parrainage sont : ...";

  const BRONZE = 50; // carte bronze s'acquière à partir de 50 points
  const ARGENT = 100 ;// carte bronze s'acquière à partir de 50 points
  const OR = 150 ;// carte bronze s'acquière à partir de 50 points


    public function hydrater(array $data){
        foreach ($data as $k => $v){
            // concaténer la clé pour rechercher le setter à appeler
            $setter= 'set' . ucfirst($k);
            if (method_exists($this, $setter)){
                //invoquer la methode
                $this-> $setter($v);
            }

        }
    }



    //MISE A JOUR DE LA CLASS ASSURE
    // AJOUTER UN POINT FIDele, cette cagnotte permert de mettre en place une carte de fidelité
    // crréer son getteur(numerique) et son setteur
    // la mise cummule les valeurs succéssivement recu la methode ne retoune pas de valeurs
    // initiliser cet attribut au sein du constructeur avec le setteur préalablement créer et
    //lorque un assuré règle son assurance sa crta est crédité de points
   // la fonction parrainer est entierement revu elle crédite la carte du parrain et du parrainer de  points
  // teste le bonus malus pour tout est initialisé à 0 et la carte est crédité de 5 points a l'initialisation
    //

    //le premier négocie , suite à la souscription
    //le premier paye sa contisation annuelle
    //afficher


    public function __construct($tableauAssociatif ){  // __construct permet d'initialiser des valeurs
        //echo "Je suis le constructeur";

//        $this ->setNom($nom);
//        $this ->setAge($age);
        $this->hydrater($tableauAssociatif );
//        $this ->setDomicile($domicile);
//        $this ->setBonusMalus(0 );
//        $this->setPointFidelite(5);
//
    }


// ensemble des méthodes

    public function avoirAccident(){
      $this->setBonusMalus(-14);

    }
    public function reglerAssurance(){

        //$this-> bonusMalus  = $this -> bonusMalus + 4;

        $this->setBonusMalus(4);
        $this->setPointFidelite(10);
    }

    public function parrainer(Assure $parraine){
    //echo "je gagne 10 points de bonus en parrainant !!";
//
//        if($this ->getBonusMalus() >= 10){
//            $parraine -> setBonusMalus(10) ;
//
//        }else {
//            $parraine-> setBonusMalus(4) ;
//        }
   $this->setPointFidelite(5);
   $parraine->setPointFidelite(5);

    }



    // ensembles des getteur

    public function getIdAssure(){
        return$this->IdAssure;
    }


   public function  getNom(){
     return $this->nom;
   }

   public function  getAge(){
        return $this->age;
        }

    public function getDomicile(){
        return $this->domicile;

    }

    public function getBonusMalus(){
        return $this->bonusMalus;
    }
    public static function getInformation ()
    {
        return self::$information;
    }
public  function getPointFidelite() {
        return $this->pointFidelite;
}


    // ensembles de SETTERS

    public function setIdAssure($idAssure){
        $this->idAssure =$idAssure;
    }




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
            $this->bonusMalus = -50;

        }elseif (($this-> getBonusMalus() + $bonusMalus) >= 50){
            $this->bonusMalus = 50;
        }else{
            $this->bonusMalus = $this->getBonusMalus() +$bonusMalus;
        }

      //  $this->bonusMalus = $bonusMalus;

    }
    public function setPointFidelite($pointFidelite){

//        if(!is_int($pointsFidelite)){
//            trigger_error("Valeur entière attendue",E_USER_WARNING);
//            return;
//        }
        $this->pointFidelite += $pointFidelite ;
        return;
    }


//    public function getBonusMalus(){
//        return $this-> bonusMalus;
//    }

}

