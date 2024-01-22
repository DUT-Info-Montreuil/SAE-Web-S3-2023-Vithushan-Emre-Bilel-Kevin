<?php

require_once 'modules/mod_clan/cont_clan.php';
require_once 'connexion.php';

class ModClan extends ModuleGenerique{
    protected $controleur;
    
    public function __construct() {
        //Connexion::init_connexion();
        parent::__construct();
        $this->controleur = new ContClan();
    }

    

}

?>

