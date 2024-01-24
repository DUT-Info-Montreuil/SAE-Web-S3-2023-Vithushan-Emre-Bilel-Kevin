<?php


class ModeleClassement extends Connexion {
    
    public function __construct() {
    }

    public function listeJoueursScore(){  
        $query = self::$bdd->prepare("SELECT login, MAX(score) AS max_score FROM utilisateur NATURAL JOIN lance NATURAL JOIN partie GROUP BY (login) order by (max_score) DESC");
        $query -> execute();
        $result = $query->fetchAll();
        return $result;
    }

    

    
}

?>