<?php

require_once ('vue_clan.php');
require_once ('modele_clan.php');

class ContClan {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleClan();
        $this->vue = new VueClan();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'afficherBarreDeRecherche';
    }
    
    public function exec() {
        switch($this->action) {
            case 'afficherBarreDeRecherche':
                $this->afficherBarreDeRecherche();
            break;        
            case 'rechercherClan':
                $this->afficherBarreDeRecherche();
                $this->rechercherClan();
            break;  
        }
    }

    public function rechercherClan(){
        $this->vue->afficheClanTrouver($this->modele->rechercherClan());;        
    }

    public function afficherBarreDeRecherche(){
        $this->vue->afficheBarreDeRecherche();
    }


    public function getAffichage(){
        return $this->vue->getAffichage();
    }

}

?>