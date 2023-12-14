<?php

class ComposantMenu extends ComposantGenerique {
	public function __construct () {
		parent::__construct();
		$this->controleur = new ControleurCompMenu();
	}
	

}