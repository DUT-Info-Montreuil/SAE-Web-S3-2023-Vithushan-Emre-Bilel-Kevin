<?php
class ModeleClan extends Connexion{

    private int $idJoueur = 1;

    public function quitterClan() {
        $req = "DELETE FROM Appartient where idUtilisateur = $this->idJoueur";
        $pdo_req = self::$bdd->query($req);
        return $pdo_req->fetchAll();
    }

    public function verifclan() {
        $req = "SELECT * FROM Clan WHERE idClan = (SELECT idClan FROM Appartient WHERE idUtilisateur = $this->idJoueur)";
        $pdo_req = self::$bdd->query($req);
        return $pdo_req->fetchAll();
    }

    public function JoueursDansClan($Clan) {
        $req = "SELECT nom, niveau FROM Utilisateur NATURAL JOIN Appartient WHERE idClan = $Clan";
        $pdo_req = self::$bdd->query($req);
        return $pdo_req->fetchAll();
    }

    /*public function rejointClan() {
        $idjoueur = ;// le getter de l'id du joueurs connecté
        $idclan = "SELECT "
        $req = "INSERT INTO Appartient (idUtilisateur, idClan)VALUES ($idjoueur, $idclan)";
        $pdo_req = self::$bdd->query($req);
        return $pdo_req->fetchAll();
    }*/
}