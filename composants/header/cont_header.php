<?php



require_once "composants/header/vue_header.php";


class ControleurCompHeader {
	private $vue;


	public function __construct() {
		$this->vue = new VueCompHeader();
	}


	public function exec () {
		$this->vue->vue_header();
	}	


	public function c() {
       $this->vue->profil();
    }





	public function getVue() {
        return $this->vue;
    }



}
