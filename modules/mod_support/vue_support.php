<?php

class VueSupport extends VueGenerique{
	public function __construct () {
		parent::__construct();
		?>
		<link rel="stylesheet" href="modules/mod_support/style_support.css">
		<?php
	}

	public function afficheTitreFaq(){
		?>
		<h1 class="titre_support">FAQ</h1>
		<?php
	}

	public function afficheUneQuestionReponse ($q,$r) {
		?>
			<div class ="QuestionReponse">
				<h2><li><?=$q?></h2>
				<p><?=$r?></p>
			</div>
        <?php
	}

	public function afficheTouteLesQuestionReponse ($tab_faq) {
		foreach ($tab_faq as $faq) {
			$reponse = isset($faq["reponse"]) ? $faq["reponse"] : "";
			$question = isset($faq["question"]) ? $faq["question"] : "";
			$this->afficheUneQuestionReponse($question,$reponse);
		}
	}
	
	public function afficheTouteLesQuestionReponseDansUnElementABarreDeDefilement ($tab_faq) {
		?>
			<div class="element_defilement">
				<?php $this->afficheTouteLesQuestionReponse($tab_faq)?>
			</div>
        <?php
	}

	public function barreDeRecherche(){
		echo '<form class="barrederecherche" method="post" action="index.php?module=support&&action=rechercherQuestion">';
        echo '<input type="search"  name="recherche" placeholder="rechercher une question">';
        echo '<input type="submit" name="envoyer">';
        echo '</form>';
	}

	public function afficherQuestionTrouver($tab) {
        if (!empty($tab)) {
			$this->afficheTitreFaq();
            $this->afficheTouteLesQuestionReponseDansUnElementABarreDeDefilement($tab);
        }
        else {
            ?>
                <p>Aucune question trouvé</p>
            <?php
        }
    }
	
	
    public function contact () {
		?>
        <h1 class="titrecontacternous"> Contactez-Nous</h1>
		<p class="soustitre">Disponibles de 9h a 18h du lundi au vendredi</p>	
		<div class="row num">
      		<div class="col">
				<img src="images/images_support/tel.png" alt="logo-tel" width="50">
				<br>
				Par Telephone
				<br>
				Au 00 00 00 00 00 .
			</div>
      		<div class="col mail">
				<img src="images/images_support/lettre.png" alt="logo-lettre" width="50">
				<br>
				Par Mail
				<br>
				A adresse@mail.com .
			</div>
    	</div>
		<?php
	}
	
}
