<?php

class VueConnexion extends VueGenerique{
    
    public function __construct() {
        parent::__construct();

    }

    public function afficherFormulaire() {
        ?>
        <link rel="stylesheet" href=".//style.css">
        <?php
        echo '<form method="post" action="index.php?module=mod2&&action=ajout">';
        echo 'nom d utilisateur : <input type="text" name="nom"><br>';
        echo 'mot de passe : <input type="password" name="mdp"><br>';
        echo '<input type="submit" value="S inscrire">';
        echo '</form>';
    }

    public function connexionCompte() {
        ?>
        <link rel="stylesheet" href=".//style.css">
        <?php
        echo '<form method="post" action="index.php?module=mod1&&action=connexion">';
        echo 'nom d utilisateur : <input type="text" name="nom2"><br>';
        echo 'mot de passe : <input type="password" name="mdp2"><br>';
        echo '<input type="submit" value="Connexion">';
        echo '</form>';
    }

    public function getVue(){
        return $this;
    }

}
?>