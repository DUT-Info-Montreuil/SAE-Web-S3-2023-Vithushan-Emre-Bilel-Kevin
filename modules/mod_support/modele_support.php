<?php

class ModeleSupport extends Connexion{
	
	public function get_faq () {
		$req = "SELECT * FROM Faq";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}
	
	
	
	
}
