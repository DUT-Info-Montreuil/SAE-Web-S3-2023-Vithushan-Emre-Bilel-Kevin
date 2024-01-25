<?php

class VueConnexion extends VueGenerique{
    
    public function __construct() {
        parent::__construct();

    }

    public function afficherFormInscription() {
        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="modules/mod_connexion/style_connexion.css">
        <?php

        echo '<h1 class="text"><p>Inscription</p></h1>';
        echo '<div class="divForm">';
        echo '<form method="post" action="index.php?module=connexion&&action=inscription">';
        echo '<div class="mb-3">';
        echo '<label for="InputLogin" class="form-label"><p class="text">Login</p></label>';
        echo '<input type="text" class="form-control" id="InputLogin" name="loginIn">';
        echo '<div class="mb-3">';
        echo '<label for="InputMotDePasse" class="form-label"><p class="text">Mot De Passe</p></label>';
        echo '<input type="password" class="form-control" id="InputMotDePasse" name="mdpIn">';
        echo '<div class="mb-3">';
        echo '<label for="Inputmail" class="form-label"><p class="text">Mail</p></label>';
        echo '<input type="text" class="form-control" id="Inputmail" name="mailIn">';
        echo '</div>';
        echo '</div>';
        echo '<div class="mb-3 form-check">';
        echo '</div>';
        echo '<div class="divboutton">';
        echo '<input type="submit" class="btn btn-dark" value="Inscription">';
        echo '</div>';
        echo '</form>';
        echo '</div>';


    }

    public function afficherFormConnexion() {
        ?>
        <link rel="stylesheet" href="modules/mod_connexion/style_connexion.css">
        <?php

        echo '<h1 class="text">Connexion</h1>';
        echo '<div class="divForm">';
        echo '<form method="post" action="index.php?module=connexion&&action=connexion">';
        echo '<div class="mb-3">';
        echo '<label for="InputLogin" class="form-label"><p class="text">Login</p></label>';
        echo '<input type="text" class="form-control" id="InputLogin" name="loginCo">';
        echo '<div class="mb-3">';
        echo '<label for="InputMotDePasse" class="form-label"><p class="text">Mot De Passe</p></label>';
        echo '<input type="password" class="form-control" id="InputMotDePasse" name="mdpCo">';
        echo '</div>';
        echo '<div class="mb-3 form-check">';
        echo '</div>';
        echo '<div class="divboutton">';
        echo '<input type="submit" class="btn btn-dark" value="Connexion">';
        echo '</div>';
        echo '</form>';
        echo '</div>';


    }

    public function connecte()
    {
        echo '<p class="text">Vous vous étes inscrit avec succés !</p>';
    }


    public function getVue(){
        return $this;
    }

}
?>