<?php

require_once 'modules/mod_ami/cont_ami.php';
require_once 'connexion.php';

class ModAmi extends ModuleGenerique{
    protected $controleur;
    
    public function __construct() {
        //Connexion::init_connexion();
        parent::__construct();
        $this->controleur = new ContAmi();
    }

    

}

?>

