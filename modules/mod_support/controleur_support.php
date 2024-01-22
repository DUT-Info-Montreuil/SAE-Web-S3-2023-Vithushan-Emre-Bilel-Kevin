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
				$this->test(); 
				$this->contacter();
				break;
			case "faq" :
				$this->test();
				break;	
			default : 
				die ("Action inexistante");
			
		}
	}
	
	private function test () {
		$this->vue->afficheTitreFaq();
        $tab_faq = $this->modele->get_faq();
		$this->vue->afficheTouteLesQuestionReponseDansUnElementABarreDeDefilement($tab_faq);
	}



	private function contacter () {
		$this->vue->contact();
	}
		

}
?>