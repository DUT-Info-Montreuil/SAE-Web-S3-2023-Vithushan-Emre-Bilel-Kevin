<?php

class VueClassement extends VueGenerique{
    
    public function __construct() {
        parent::__construct();
        ?> 

        <link rel="stylesheet" href="modules/mod_classement/style_classement.css"> <?php

    }

   
    public function afficherTitre(){
        ?><h1 class="container titreclassement"> CLASSEMENT</h1> 
        <br><?php
    }
    public function afficheJoueur($compteur,$login,$score) {
        ?>
        <tr>
            <th scope="row">
                <?=$compteur?>  
            </th>
            <td>
                <?=$login?>
            </td>
            <td>
                <?=$score?>
            </td>
        </tr>
        <?php
	}

    public function afficheJoueurLigneScore ($liste) {
        $compteur = 1;
        foreach ($liste as $joueur) {
			$login = isset($joueur["login"]) ? $joueur["login"] : "";
			$score = isset($joueur["max_score"]) ? $joueur["max_score"] : "";
			$this->afficheJoueur($compteur,$login,$score);
            $compteur++;
		}
	}

	

    public function afficheTableScore($liste){
        ?>
        <div class= "container tablescore">
            <h1> MEILLEUR JOUEURS </h1>
            <table class="table table-dark ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Meilleur Score</th>
                    </tr>
                </thead>
                <tbody>   
                    <?php $this->afficheJoueurLigneScore($liste) ?>
                </tbody>
            </table>
        </div>
        <?php
    }


    public function afficheJoueurLigneKill ($liste) {
        $compteur = 1;
        foreach ($liste as $joueur) {
			$login = isset($joueur["login"]) ? $joueur["login"] : "";
			$score = isset($joueur["nb_kill"]) ? $joueur["nb_kill"] : "";
			$this->afficheJoueur($compteur,$login,$score);
            $compteur++;
		}
	}

	

    public function afficheTableKill($liste){
        ?>
        <div class= "container tablekill">
            <h1> MEILLEUR JOUEURS (KILL)</h1>
            <table class="table table-dark ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">NbDeKill</th>
                    </tr>
                </thead>
                <tbody>   
                    <?php $this->afficheJoueurLigneKill($liste) ?>
                </tbody>
            </table>
        </div>
        <?php
    }


    public function afficheClanLigneScore($liste) {
        $compteur = 1;
        foreach ($liste as $clan) {
			$nom = isset($clan["nom"]) ? $clan["nom"] : "";
			$score = isset($clan["score_total"]) ? $clan["score_total"] : "";
			$this->afficheJoueur($compteur,$nom,$score);
            $compteur++;
		}
	}

	

    public function afficheTableClanScore($liste){
        ?>
        <div class= "container tableclanscore ">
            <h1> MEILLEUR CLAN </h1>
            <table class="table table-dark">
                <thead>
                    <tr class="hautdetableau">
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Score Total</th>
                    </tr>
                </thead>
                <tbody>   
                    <?php $this->afficheClanLigneScore($liste) ?>
                </tbody>
            </table>
        </div>
        <?php
    }

    public function getVue(){
        return $this;
    }

}
?>