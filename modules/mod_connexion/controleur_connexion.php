<?php

require_once 'modules/mod_support/modele_connexion.php';
require_once 'modules/mod_support/vue_connexion.php';


class ControleurConnexion {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleConnexion();
        $this->vue = new VueConnexion();
    }
    

    public function connect() {
        $this->modele->connexion_utilisateur();
    }

    public function exec() {
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'null';

        switch($this->action) {
            case 'ajout':
                $this->ajout();
                break;
            case 'connexion':
                $this->connect();
                break;
        }
    }

    public function ajout() {
        $log = isset($_POST['nom']) ? $_POST['nom'] : null;
        $mot_de_passe = isset($_POST['mdp']) ? $_POST['mdp'] : null;
         
        $this->modele->ajouterUtilisateur($log,$mot_de_passe);
         
        echo 'Vous vous étes inscrit avec succés !<br>';
    }


    public function getAffichage(){
        return $this->vue->getAffichage();
    }

}

?>