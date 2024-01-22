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
	
	
    public function contact () {
		?>
        <h1> Contactez-Nous</h1>
		<p>Disponibles de 9h a 18h du lundi au vendredi</p>	
		<div class="row">
      		<div class="col">
				<img src="images/images_support/tel.png" alt="logo-tel" width="50">
				<br>
				Par Telephone
				<br>
				Au 00 00 00 00 00 .
			</div>
      		<div class="col">
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
