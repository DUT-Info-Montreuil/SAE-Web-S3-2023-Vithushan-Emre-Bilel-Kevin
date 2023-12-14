<?php
class Connexion {

    protected static $bdd;

    public static function init_connexion() {
        self::$bdd = new PDO('mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201691', 'dutinfopw201691', 'bygydasa');

    }
}

?>