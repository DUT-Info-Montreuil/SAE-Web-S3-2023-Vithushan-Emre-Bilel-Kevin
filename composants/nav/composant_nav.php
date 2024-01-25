<?php
require_once "composants/nav/cont_nav.php";

class ComposantNav extends ComposantGenerique {
	public function __construct () {
		parent::__construct();
		$this->controleur = new ControleurCompNav();
	}
	

}