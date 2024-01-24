<?php

require_once 'modules/mod_classement/controleur_classement.php';


class ModClassement extends ModuleGenerique {
    
    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurClassement();
    }

}

?>
