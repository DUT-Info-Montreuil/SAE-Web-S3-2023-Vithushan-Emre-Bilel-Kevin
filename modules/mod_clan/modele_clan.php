<?php

require_once 'connexion.php';

class ModeleClan extends Connexion {
    
    public function rechercherClan(){
        if(isset($_POST['recherche']) and !empty($_POST['recherche'])){
            $clanChercher = htmlspecialchars($_POST['recherche']);
            $nomClan = self::$bdd->prepare('SELECT * FROM clan WHERE nom LIKE :nom');

            $nomClan->execute(['nom' => $clanChercher.'%']);
            $resultat = $nomClan->fetchAll(PDO::FETCH_ASSOC);

            return $resultat; 
         } 
         
    }

    

}

?>