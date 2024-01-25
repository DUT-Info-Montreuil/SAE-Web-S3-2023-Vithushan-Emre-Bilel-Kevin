<?php
require_once('vue_generique.php');
class VueClan extends VueGenerique{

    public function __construct () {
		parent::__construct();
		?>
		<link rel="stylesheet" href="modules/mod_clan/style_clan.css">
		<?php
	}

    public function afficheBarreDeRecherche() {
        ?>
            <form class="form-recherche-clan" method="post" action="index.php?module=clan&&action=rechercherClan">
                <input type="search" name="recherche" placeholder="rechercher un clan">
                <input type="submit" name="envoyer">
            </form>

        <?php
    }

    public function afficheUnClan ($nom, $nbJoueur, $score, $idClan) {
        ?>
        <div class="clan">
            <div>
                <p><?php echo $nom?></p>
            </div>
            <div class="clan_infoClan">
                <p><?php echo $nbJoueur?>/50</p>
                <p><?php echo $score?> pts</p>
                <a href="index.php?module=clan&&action=ajouterJoueurAuClan&&clan=<?php echo $idClan?>">Rejoindre</a>
            </div>
        </div>
        <?php
    }

    public function afficheToutLesClans ($tab) {
        foreach ($tab as $t) {
            $this->afficheUnClan($t['nom'], $t['nombreDeJoueur'], $t['totalArgent'], $t['idClan']);
        }
    }

    public function afficheToutLesClansDansUnElementADefilement ($tab) {
        ?>
        <div class="element_scrollable">
            <?php $this->afficheToutLesClans($tab);?>
        </div>
        <?php
    }

    public function afficheToutLesClansTrouver ($tab) {
        if (!empty($tab)) {
            foreach ($tab as $t) {
                $this->afficheUnClan($t['nom'], $t['nombreDeJoueur'], $t['totalArgent'], $t['idClan']);
            }
        }
        else {
            ?>
                <p>Aucun Clan trouvé</p>
            <?php
        }

    }

    public function afficheToutLesClansTrouverDansUnElementScrollable ($tab) {
        ?>
        <div class="element_scrollable">
            <?php $this->afficheToutLesClansTrouver($tab);?>
        </div>
        <?php
    }

    public function afficherMonClan($tab) {

        if(isset($_SESSION['Utilisateur'])) {
        ?>
            <h2 class="titre2_pageClan"><?php echo $tab['nom']?></h2>
            <div class='monClan'>
                <div>
                    <p>taille <?php echo $tab['nombreDeJoueur'] ?> /50</p>
                </div>
                <div class='monClan_infoClan'>
                    <p>pts <?php echo $tab['totalArgent'] ?></p>
                    <a href="index.php?module=clan&&action=quitter&&idClan=<?php echo $tab['idClan'] ?>">quitter</a>
                </div>
            </div>
        <?php }else {
            echo 'vous n avais pas de clan';
        }
    }

    public function afficheUnJoueur($nom, $niveau, $point) {
        ?>
            <div class="joueur">
                <div>
                    <p><?php echo $nom ?></p>
                </div>
                <div class="joueur_info">
                    <p>lvl<?php echo $niveau ?></p>
                    <p><?php echo $point ?> pts</p>
                </div>
            </div>
        <?php
    }

    public function afficheToutLesJoueur($tab) {
        if(isset($_SESSION['Utilisateur'])) {
        foreach($tab as $t) {
            $this->afficheUnJoueur($t['nom'], $t['niveau'], $t['argentUtilisateur']);
        }
        }
    }

    public function afficherMonClanEtListJoueurDansUnElementScrollable ($tab, $tab2) {
    
        ?>
            <div class="monClan_elementScrollable">
                <?php $this->afficherMonClan($tab);?>
                <?php $this->afficheToutLesJoueur($tab2);?>
            </div>
        <?php
    }


    public function getVue(){
        return $this;
    }

}
?>