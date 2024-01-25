<?php

require_once ('vue_ami.php');
require_once ('modele_ami.php');

class ContAmi {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleAmi();
        $this->vue = new VueAmi();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'afficherBarreDeRecherche';
    }
    
    public function exec() {
        switch($this->action) {
            case 'afficherBarreDeRecherche':
                $this->modele->aUnClan();
                $this->afficherBarreDeRecherche();
                $this->afficheLesClans();
                $this->afficheMonClan();
            break;        
            case 'rechercherClan':
                $this->afficherBarreDeRecherche();
                $this->rechercherClan();
                $this->afficheMonClan();
            break;
            case 'ajouterJoueurAuClan':
                 $this->ajouterJoueurAuClan();
            break;
            //case 'quitter' : 
            //    $this->quitterLeClan();
            break;
        }
    }

    public function afficherBarreDeRecherche(){
        $this->vue->afficheBarreDeRecherche();
    }

    public function rechercherClan(){
        $this->vue->afficheToutLesClansTrouverDansUnElementScrollable($this->modele->rechercherClan());;        
    }

    public function afficheLesClans () {
        $tab = $this->modele->recupereInfoClan();
        $this->vue->afficheToutLesClansDansUnElementADefilement($tab);
    }

    public function ajouterJoueurAuClan () {
        if ($this->modele->ajouterJoueurAUClan()) {
            $this->afficherBarreDeRecherche();
            $this->vue->confirmAjout();
            $this->afficheLesClans();
            $this->afficheMonClan();
        }
        else {
            $this->afficherBarreDeRecherche();
            $this->vue->aDejaUnClan();
            $this->afficheLesClans();
            $this->afficheMonClan();
        }
    }

    public function afficheMonClan() {
        $tab = $this->modele->informationAfficherMonClan();
        $tab2 = $this->modele->infoJoueur();
        $this->vue->afficherMonClanEtListJoueurDansUnElementScrollable($tab, $tab2);
    }

    public function quitterLeClan() {
        $this->modele->quitterLeClan();
        $this->afficherBarreDeRecherche();
        $this->vue->confirmQuitter();
        $this->afficheLesClans();
        $this->afficheMonClan();
    }

    public function getAffichage(){
        return $this->vue->getAffichage();
    }

}

?>