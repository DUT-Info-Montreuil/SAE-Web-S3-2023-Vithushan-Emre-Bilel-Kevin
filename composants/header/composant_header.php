<?php
require_once "composants/menu/cont_menu.php";

class ComposantMenu extends ComposantGenerique {
	public function __construct () {
		parent::__construct();
		$this->controleur = new ControleurCompMenu();
	}
	

}