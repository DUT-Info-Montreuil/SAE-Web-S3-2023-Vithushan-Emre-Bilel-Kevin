<?php

class ModeleSupport extends Connexion{
	
	public function get_faq () {
		$req = "SELECT * FROM questionreponse";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}

	public function rechercherQuestion(){
		if(isset($_POST['recherche']) and !empty($_POST['recherche'])){
            $questionChercher = htmlspecialchars($_POST['recherche']);
            $nomQuestion = self::$bdd->query('SELECT question, reponse FROM questionreponse WHERE question LIKE "'.$questionChercher.'%" ');

            return $nomQuestion->fetchAll(); 
         } 
	}
	
	
	
	
}
