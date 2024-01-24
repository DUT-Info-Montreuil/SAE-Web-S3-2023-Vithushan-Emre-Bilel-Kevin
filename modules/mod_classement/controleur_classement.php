<?php

require_once 'modules/mod_classement/modele_classement.php';
require_once 'modules/mod_classement/vue_classement.php';

class ControleurClassement {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleClassement();
        $this->vue = new VueClassement();
    }
    
    public function exec() {
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'accueil';

        switch($this->action) {
            case 'accueil':
                $this->tableClassementScore();
                break;
                default :
				die ("Module inexistant");
        }
    }


    
    public function tableClassementScore() {
        $this->vue->afficheTableScore($this->modele->listeJoueursScore());
    }
  
    


}
?>