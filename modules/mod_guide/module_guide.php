<?php

require_once "modules/mod_guide/controleur_guide.php";

class ModGuide extends ModuleGenerique {


    public function __construct () {
        parent::__construct();
        $this->controleur = new ControleurGuide();
    }



}
?>
