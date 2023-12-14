<?php
class Connexion {

    protected static $bdd;

    public function init_connection() {
        $lien = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201691";
        $utilisateur = "dutinfopw201691";
        $mdp = "bygydasa";
        self::$bdd = new PDO ($lien,$utilisateur,$mdp);
    }
}

?>