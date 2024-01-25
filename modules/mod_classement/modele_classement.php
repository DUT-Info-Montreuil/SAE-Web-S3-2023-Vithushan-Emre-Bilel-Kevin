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

    public function listeJoueursKill(){  
        $query = self::$bdd->prepare("SELECT login, MAX(nbennemismorts) AS nb_kill FROM utilisateur NATURAL JOIN lance NATURAL JOIN partie GROUP BY (login) order by (nb_kill) DESC");
        $query -> execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function listeClanScore(){  
        $query = self::$bdd->prepare("SELECT c.nom, SUM(max_score) AS score_total FROM clan c NATURAL JOIN appartient INNER JOIN utilisateur u USING(idUtilisateur) INNER JOIN ( SELECT idUtilisateur, MAX(score) AS max_score FROM lance INNER JOIN partie p USING(idPartie) GROUP BY idUtilisateur) AS max_scores ON u.idUtilisateur = max_scores.idUtilisateur GROUP BY (c.nom) ORDER BY score_total DESC");
        $query -> execute();
        $result = $query->fetchAll();
        return $result;
    }
}

?>