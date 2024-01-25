<?php

require_once 'modules/mod_connexion/modele_connexion.php';
require_once 'modules/mod_connexion/vue_connexion.php';


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
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'form_connexion';

        switch($this->action) {
            case 'form_connexion':
                $this->formulaire_connexion();
                break;
            case 'form_inscription':
                $this->formulaire_inscription();
                break;
            case 'inscription':
                $this->ajout();
                break; 
            case 'connexion':
                $this->connexion();
                break;
            case 'deconnexion':
                $this->deconnexion();
                header("Location: index.php?module=accueil");
                break;  
            default :
			die ("Module inexistant mod connexion");
        }
    }

    public function ajout() {
        $this->modele->ajouterUtilisateur();
        echo 'Vous vous étes inscrit avec succés !<br>';
    }

    public function connexion() {
        $this->modele->connexion_utilisateur();
    }

    public function formulaire_connexion() {
        $this->vue->afficherFormConnexion(); 
    }

    public function formulaire_inscription() {
        $this->vue->afficherFormInscription(); 
    }

    public function deconnexion(){
        $this->modele->deconnexion();
    }


    public function getAffichage(){
        return $this->vue->getAffichage();
    }

}

?>