<?php

class VueConnexion extends VueGenerique{
    
    public function __construct() {
        parent::__construct();

    }

    public function afficherFormInscription() {
        ?>
        <link rel="stylesheet" href="modules/mod_connexion/style_connexion.css">
        <?php
        echo '<form method="post" action="index.php?module=connexion&&action=inscription">';
        echo 'Login utilisateur : <input type="text" name="loginIn"><br>';
        echo 'mot de passe : <input type="password" name="mdpIn"><br>';
        echo 'adresse mail : <input type="text" name="mailIn"><br>';
        echo '<input type="submit" value="inscription">';
        echo '</form>';
    }

    public function afficherFormConnexion() {
        ?>
        <link rel="stylesheet" href="modules/mod_connexion/style_connexion.css">
        <?php
        echo '<form method="post" action="index.php?module=connexion&&action=connexion">';
        echo 'login : <input type="text" name="loginCo"><br>';
        echo 'mot de passe : <input type="password" name="mdpCo"><br>';
        echo '<input type="submit" value="connexion">';
        echo '</form>';
    }

    public function getVue(){
        return $this;
    }

}
?>