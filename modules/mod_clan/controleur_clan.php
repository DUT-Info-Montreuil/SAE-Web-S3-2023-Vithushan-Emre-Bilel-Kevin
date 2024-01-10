<?php
require_once "modules/mod_clan/modele_clan.php";
require_once "modules/mod_clan/vue_clan.php";

class ControleurClan {
    private $modele;
    private $vue;
    private $action;

    public function __construct() {
        $this->modele = new ModeleClan();
        $this->vue = new VueClan();
    }

    public function exec() {
        $this->action = isset($_GET["action"]) ? $_GET["action"] : "accueilPageClan";

        switch ($this->action) {
            case "accueilPageClan" :
                $this->accueilPageClan();
                break;
            case "rechercheClan" :
                $this->rechercheDeClan();
                break;
            case "rejoindreLeClan" :
                $this->rejoindreClan();
                break;
            case "quitterLeClan" :
                $this->quitterClan();
                break;
            default :
                die ("Action inexistante");

        }

    }

    public function accueilPageClan() {
        $this->vue->titrePageClan();
        $this->vue->afficheBarreRecherche();
        $this->vue->afficheListeClan();
        $this->vue->titreClan();
        $clanJoueur = $this->modele->verifClan();
        if ($clanJoueur != NULL){
            $joueursDansLeClan = $this->modele->JoueursDansClan($clanJoueur);
            $this->vue->afficheClanJoueur($clanJoueur,$joueursDansLeClan);
        }
        else {
            $this->vue->aucunClan();
        }
    }

    public function quitterClan() {
        $this->modele->quitterClan();
        }
    public function rejoindreClan() {
        $this->modele->rejointClan();
    }
    public function rechercheDeClan() {
    }








    }
