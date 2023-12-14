<?php

require_once "vue_header.php";


class ControleurCompHeader {

	public function __construct() {
		$this->vue = new VueCompHeader();
	}


	public function exec () {
		$this->vue->vue_header();
	}	


}
