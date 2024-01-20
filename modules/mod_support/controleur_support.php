<?php
require_once "modules/mod_support/modele_support.php";
require_once "modules/mod_support/vue_support.php";

class ControleurSupport {
	private $modele;
	private $vue;
	private $action;
	
	public function __construct() {
		$this->modele = new ModeleSupport();
		$this->vue = new VueSupport();
	}
	
	public function exec() {
		$this->action = isset($_GET["action"]) ? $_GET["action"] : "init";
		
		switch ($this->action) {
			case "init" :
				$this->faq();
				$this->contacter();
				break;
			case "faq" :
				$this->faq();
				break;	
			default : 
				die ("Action inexistante");
			
		}
	}
	


    private function faq () {
		$this->vue->afficheFaq();

        $tab_faq = $this->modele->get_faq();
			foreach ($tab_faq as $faq) {
				$idQuestionReponse = isset($faq["idQuestionReponse"]) ? $faq["idQuestionReponse"] : "";
				$reponse = isset($faq["reponse"]) ? $faq["reponse"] : "";
				$question = isset($faq["question"]) ? $faq["question"] : "";
				$this->vue->afficheListeFaq($question,$reponse);
			}
		
	}



	private function contacter () {
		$this->vue->contact();
	}
	
	
	
	

}