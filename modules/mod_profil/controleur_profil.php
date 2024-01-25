<?php

require_once 'modules/mod_profil/modele_profil.php';
require_once 'modules/mod_profil/vue_profil.php';


class ControleurProfil {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleProfil();
        $this->vue = new VueProfil();
    }
    

    public function connect() {
        $this->modele->connexion_utilisateur();
    }

    public function exec() {
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'profil';

        switch($this->action) {
            case 'profil':
                $this->profil();
                break;
            case 'changeMDP':
                $this->changerLeMdp();
                break;
            default :
			die ("Module inexistant mod connexion");
        }
    }

    public function profil(){
        $this->vue->profil($this->modele->afficherNiveau());
        $this->vue->test($this->modele->infoJoueur());
    }

    public function changerLeMdp(){
        $this->modele->changerLeMdp();
    }


    public function getAffichage(){
        return $this->vue->getAffichage();
    }

}

?>