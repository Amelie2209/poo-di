<?php

class AssureModele{
    private $cnx;
    public function __construct($cnx){
        $this->setCnx($cnx);
    }
    public function setCnx(PDO $cnx){
        $this->cnx = $cnx;
    }
    // Proposer l'ensemble des requêtes permettant la lecture et l'écriture sur la base de données Assurance : CRUD
    public function addAssure(Assure $assure){
        // Requête attendue de type INSERT et préparée
        $sql = 'INSERT INTO assure(nom, age, domicile, bonusMalus, pointsFidelite)  VALUES (?, ?, ?, ?, ?)';
        $idRequete = $this->cnx->prepare($sql);
        $idRequete->execute([
            $assure->getNom(),
            $assure->getAge(),
            $assure->getDomicile(),
            $assure->getBonusMalus(),
            $assure->getPtsFidelite()
        ]);
    }
    public function editAssure(Assure $assure){
        // Requête attendue de type UPDATE et préparée
        $sql = 'UPDATE assure SET nom = ?, age = ?, domicile = ?, bonusMalus = ?, pointsFidelite = ? where  id';
        $idRequete = $this->cnx->prepare($sql);
        $idRequete->execute([
            $assure->getNom(),
            $assure->getAge(),
            $assure->getDomicile(),
            $assure->getBonusMalus(),
            $assure->getPtsFidelite()
        ]);

    }

    public function deleteAssure(Assure $assure){
        // Requête attendue de type DELETE et préparée
        $sql = 'DELETE FROM asssure where idAssure = ?';
        $idRequete =$this->cnx->prepare ($sql);
        $idRequete-> execute ([$assure->getIdAssure()]);
    }

    public function getListeAssure(){
        // Requête attendue de type SELECT et requête simple
        $sql ='SELECT * FROM assure';
        $idRequete = $this->cnx->query($sql);
        while($tab = $idRequete->fetch (PDO::FETCH_ASSOC)){

            $assure[] = new Assure($tab);
        }

        return $assure;
    }
    public function getAssure($id){
        // Requête attendue de type SELECT et préparée
        $sql = 'SELECT * FROM assure WHERE idAssure = ?';
        $idRequete = $this->cnx->prepare($sql);
        $idRequete->execute([$id]);
        $tabAssociatif = $idRequete->fetch(PDO::FETCH_ASSOC);
        return new Assure($tabAssociatif);
    }

}
