<?php
class Connexion {

    protected static $bdd;

    public static function init_connexion() {
        self::$bdd = new PDO('mysql:host=localhost;dbname=bilel', 'bhadadi', '0762338205aA');

    }
}

?>