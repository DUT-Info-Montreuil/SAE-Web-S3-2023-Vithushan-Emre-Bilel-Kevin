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
	
}
