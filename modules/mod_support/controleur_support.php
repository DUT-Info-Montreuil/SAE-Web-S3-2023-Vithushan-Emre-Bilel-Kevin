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
		$this->action = isset($_GET["action"]) ? $_GET["action"] : "barreDeRecherche";
		
		switch ($this->action) {
			case "barreDeRecherche":
				$this->TitreFaq();
				$this->barreDeRecherche();
				$this->test(); 
				$this->contacter();
				break;
			case "rechercherQuestion":
				$this->barreDeRecherche();
				$this->rechercherQuestion();
				$this->contacter();
				break;
			default : 
				die ("Action inexistante");
			
		}
	}
	
	private function test () {
        $tab_faq = $this->modele->get_faq();
		$this->vue->afficheTouteLesQuestionReponseDansUnElementABarreDeDefilement($tab_faq);
	}

	private function barreDeRecherche(){
		$this->vue->barreDeRecherche();
	}

	private function rechercherQuestion(){
		$this->vue->afficherQuestionTrouver($this->modele->rechercherQuestion());
		//$this->modele->rechercherQuestion();
	}

	private function TitreFaq(){
		$this->vue->afficheTitreFaq();
	}


	private function contacter () {
		$this->vue->contact();
	}
		

}
?>