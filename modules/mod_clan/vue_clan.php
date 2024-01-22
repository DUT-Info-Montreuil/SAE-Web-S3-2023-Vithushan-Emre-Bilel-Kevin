<?php
require_once('vue_generique.php');
class VueClan extends VueGenerique{

    public function afficheBarreDeRecherche() {
        echo '<form method="post" action="index.php?module=clan&&action=rechercherClan">';
        echo '<input type="search" name="recherche" placeholder="rechercher un clan">';
        echo '<input type="submit" name="envoyer">';
        echo '</form>';
    }

    public function afficheClanTrouver($tab) {
        if (!empty($tab)) {
            foreach ($tab as $a) {
                ?>
                <p><?= $a['nom']?></p>
                <?php 
            }
        }
        else {
            ?>
                <p>Aucun Clan trouvé</p>
            <?php
        }
    }

    public function getVue(){
        return $this;
    }

}
?>