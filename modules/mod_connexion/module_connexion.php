<?php

require_once 'modules/mod_support/controleur_connexion.php';


class ModConnexion extends ModuleGenerique {
    
    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurConnexion();
    }

}

?>
