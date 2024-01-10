<?php

class VueClan extends VueGenerique{
    public function __construct () {
        parent::__construct();

    }

    public function afficheListeClan ($tab_clan) {
        ?>
        <h1>Liste des Clans</h1>
        <ul>
        <?php
        foreach ($tab_clan as $clan) {
            $idClan = isset($clan["idClan"]) ? $clan["idClan"] : "";
            $nom = isset($clan["nom"]) ? $clan["nom"] : "";
            $nombreJoueurs = isset($clan["nombreJoueurs"]) ? $clan["nombreJoueurs"] : "";
            $score = isset($clan["score"]) ? $clan["score"] : "";
            ?><li><a href="index.php?module=support&action=faq&id=<?=$idClan?>"><?=$nom?><?=$nombreJoueurs?><br><?=$score?></a></li><?php
        }
        ?></ul><?php
    }


}
