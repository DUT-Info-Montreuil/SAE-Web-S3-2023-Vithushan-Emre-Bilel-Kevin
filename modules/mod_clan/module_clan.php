<?php
require_once "modules/mod_clan/controleur_clan.php";

class ModClan extends ModuleGenerique {


    public function __construct () {
        parent::__construct();
        $this->controleur = new ControleurClan();
    }



}
