<?php

class VueSupport extends VueGenerique{
	public function __construct () {
		parent::__construct();

	}

	


    public function listfaq ($tab_faq) {
		?>
        <h1>FAQ</h1>
        <ul>
        <?php
		  foreach ($tab_faq as $faq) {
			// Vérifie si les clés "idQuestionReponse" et "reponse" existent avant de les utiliser
			$idQuestionReponse = isset($faq["idQuestionReponse"]) ? $faq["idQuestionReponse"] : "";
			$reponse = isset($faq["reponse"]) ? $faq["reponse"] : "";
			$question = isset($faq["question"]) ? $faq["question"] : "";
			?><li><a href="index.php?module=support&action=faq&id=<?=$idQuestionReponse?>"><?=$question?><br><?=$reponse?></a></li><?php
		}
		?></ul><?php
	}

	
    public function contact () {
		?>
		<style>
			.row {
    			display: flex;
  			}
  			.col {
				text-align: center;
				flex: 1; 
				padding: 1em;
				border: solid;
  			}
		</style>
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
        <ul>
		<?php
	}
	
}
