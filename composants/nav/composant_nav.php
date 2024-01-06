<?php
require_once "cont_nav.php";

class ComposantNav extends ComposantGenerique {
	public function __construct () {
		parent::__construct();
		$this->controleur = new ControleurCompNav();
	}
	

}