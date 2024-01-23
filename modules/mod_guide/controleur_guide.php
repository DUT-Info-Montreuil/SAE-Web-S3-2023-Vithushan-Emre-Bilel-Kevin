<?php

require_once "modules/mod_guide/modele_guide.php";
require_once "modules/mod_guide/vue_guide.php";

class ControleurGuide
{
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleGuide();
        $this->vue = new VueGuide();
    }

    public function exec() {

        $this->action = isset($_GET["action"]) ? $_GET["action"] : "pageguide";

        switch ($this->action) {
            case "pageguide" :
                $this->affiche_guide();
                break;
            default :
                die ("Action inexistante");

        }
    }

    public function affiche_guide(){
        $this->vue->affiche_guide_fichier();
        $this->vue->affiche_liste_tours();
        $this->vue->affiche_liste_ennemis();
    }

}
?>