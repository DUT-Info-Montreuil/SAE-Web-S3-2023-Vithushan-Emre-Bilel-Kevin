<?php

require_once 'modules/mod_accueil/modele_accueil.php';
require_once 'modules/mod_accueil/vue_accueil.php';


class ControleurAccueil {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleAccueil();
        $this->vue = new VueAccueil();
    }
    

   

    public function exec() {
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'accueil';

        switch($this->action) {
            case 'accueil':
                $this->afficherAccueil();
                break;
                default :
				die ("Module inexistant");
        }
    }

    public function afficherAccueil() {
        $this->vue->accueil();
    }


    
}


?>