<?php
require_once "modules/mod_joueurs/controleur_joueurs.php";

class ModJoueurs extends ModuleGenerique {
	
	
	public function __construct () {
		parent::__construct();
		$this->controleur = new ControleurJoueurs();
	}
	


}
