<?php
require_once('vue_generique.php');
class VueAmi extends VueGenerique{

    public function __construct () {
		parent::__construct();
		?>
		<link rel="stylesheet" href="modules/mod_ami/style_ami.css">
		<?php
	}

    public function afficheBarreDeRecherche() {
        ?>
            <form class="form-recherche-clan" method="post" action="index.php?module=ami&&action=rechercherClan">
                <input type="search" name="recherche" placeholder="rechercher un clan">
                <input type="submit" name="envoyer">
            </form>

        <?php
    }

    public function afficheUnClan ($nom) {
        ?>
        <div class="clan">
            <div>
                <p><?php echo $nom?></p>
            </div>
            <div class="clan_infoClan">
                <?php if(isset($_SESSION['Utilisateur'])) { ?>
               <!-- <a href="index.php?module=ami&&action=ajouterJoueurAuClan&&clan=<?php echo $idClan?>">Rejoindre</a> -->
               <a href="index.php?module=ami&&action=ajouterJoueurAuClan">Ajouter</a> 
                <?php } ?>
            </div>
        </div>
        <?php
    }

    public function afficheToutLesClans ($tab) {
        foreach ($tab as $t) {
            $this->afficheUnClan($t['nom']);
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
                $this->afficheUnClan($t);
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

        if(isset($_SESSION['Utilisateur']) && isset($_SESSION['clan'])) {
        ?>
            <h2 class="titre2_pageClan"><?php echo $tab['nom']?></h2>
            <div class='monClan'>
                <div class='monClan_infoClan'>
                  <!--  <a href="index.php?module=clan&&action=quitter&&idClan=<?php echo $tab['idUtilisateur'] ?>">quitter</a> -->
                </div>
            </div>
        <?php }
        else {
            ?> <p>Vous n'avez pas de clan ou vous n'etes pas connecté.</p>
            <?php
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
        if(isset($_SESSION['Utilisateur']) && isset($_SESSION['clan'])) {
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

    public function confirmAjout() {
        ?>
            <p class='paragraphe'>Vous avez rejoint le clan</p>
        <?php
    }

    public function aDejaUnClan() {
        ?>
        <p class='paragraphe'>Vous avez déjà un clan</p>
    <?php
    }

    public function confirmQuitter() {
        ?>
            <p class='paragraphe'>Vous avez quitter le Clan</p>
        <?php
    }


    public function getVue(){
        return $this;
    }

}
?>