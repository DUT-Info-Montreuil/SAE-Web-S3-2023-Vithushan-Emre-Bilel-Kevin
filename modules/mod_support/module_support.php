<?php
require_once "modules/mod_support/controleur_support.php";

class ModSupport extends ModuleGenerique {
	
	
	public function __construct () {
		parent::__construct();
		$this->controleur = new ControleurSupport();
	}
	


}
