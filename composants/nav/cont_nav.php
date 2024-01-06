<?php

require_once "composants/nav/vue_nav.php";


class ControleurCompNav {
	private $vue;


	public function __construct() {
		$this->vue = new VueCompNav();
	}


	public function exec () {
		$this->vue->vue_nav();
	}	


	public function getVue() {
        return $this->vue;
    }

}
