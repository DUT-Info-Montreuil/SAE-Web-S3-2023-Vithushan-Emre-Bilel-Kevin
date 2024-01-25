<?php

class ModeleClan extends Connexion {
    
    public function rechercherClan(){

        if(isset($_POST['recherche']) and !empty($_POST['recherche'])){
            $clanChercher = htmlspecialchars($_POST['recherche']);
            $nomClan = self::$bdd->prepare('SELECT c.nom, SUM(argentUtilisateur) AS totalArgent, COUNT(*) AS nombreDeJoueur, idClan FROM utilisateur INNER JOIN appartient USING(idUtilisateur) INNER JOIN clan c USING(idClan) WHERE c.nom LIKE :nom GROUP BY c.nom, idClan');
            $nomClan->execute([':nom' => $clanChercher.'%']);
            return $nomClan->fetchAll(); 
         } 
         
    }

    public function recupereInfoClan () {
        $requeteClan = self::$bdd->query('SELECT c.nom, SUM(argentUtilisateur) AS totalArgent, COUNT(*) AS nombreDeJoueur, idClan FROM utilisateur INNER JOIN appartient USING(idUtilisateur) INNER JOIN clan c USING(idClan) GROUP BY c.nom, idClan');
        return $requeteClan->fetchAll();
    }

    public function recuperetIdJoueur() {
           $nomJoueur = $_SESSION['Utilisateur'];
           $idJoueur = self::$bdd->prepare('Select idUtilisateur from utilisateur where nom=:nom');
           $idJoueur->execute([':nom' => $nomJoueur]);
           return $idJoueur->fetch();
    }

    public function recupereIdClan($idJoueurChoisi) {
            $idClan = self::$bdd->prepare('select idClan from clan INNER JOIN appartient USING(idClan) WHERE idUtilisateur=:idUtilisateur');
            $idClan->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
            return $idClan->fetch(); 
    }

    public function ajouterJoueurAUClan () {

        if (isset($_GET['clan']) && isset($_SESSION['Utilisateur']) ) {

           $idClan = htmlspecialchars($_GET['clan']);
           $idJoueurChoisi = $this->recuperetIdJoueur();
           
           if (isset($_SESSION['clan'])) {
                return false;
           }

           else {
                $insertionJoueur = self::$bdd->prepare('Insert into appartient (idUtilisateur, idClan) values (:idUtilisateur, :idClan)');
                $insertionJoueur->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur'], ':idClan' => $idClan]);
                $_SESSION['clan'] = $idClan;
                return true;
           }

        }
    }

    public function informationAfficherMonClan () {

        if (isset($_SESSION['Utilisateur']) && isset($_SESSION['clan'])) {

            $idJoueurChoisi = $this->recuperetIdJoueur();
            $idClanChoisi = $this->recupereIdClan($idJoueurChoisi); 

            $recupereInfoClan = self::$bdd->prepare('SELECT SUM(argentUtilisateur) as totalArgent, COUNT(*) as nombreDeJoueur, idClan, c.nom from clan c INNER JOIN appartient USING(idClan) INNER JOIN utilisateur USING(idUtilisateur) where idClan=:idClan');
            $recupereInfoClan->execute(['idClan' => $idClanChoisi['idClan']]);
            return $recupereInfoClan->fetch();
        }
    }

    public function infoJoueur () {
        if (isset($_SESSION['Utilisateur']) && isset($_SESSION['clan'])) {
            
            $idJoueurChoisi = $this->recuperetIdJoueur();
            $idClanChoisi = $this->recupereIdClan($idJoueurChoisi);

            $recupereInfoJoueur = self::$bdd->prepare('SELECT u.nom, argentUtilisateur, niveau FROM utilisateur u INNER JOIN appartient USING (idUtilisateur) INNER JOIN clan USING (idClan) WHERE idClan=:idClan');
            $recupereInfoJoueur->execute(['idClan' => $idClanChoisi['idClan']]);
            return $recupereInfoJoueur->fetchAll();
        }
    }

    public function quitterLeClan () {
        if (isset($_SESSION['Utilisateur']) && $_GET['idClan']) {

            $idJoueurChoisi = $this->recuperetIdJoueur();
            $idClan = htmlspecialchars($_GET['idClan']);

            $quitterLeClan = self::$bdd->prepare('DELETE FROM appartient where idUtilisateur=:idUtilisateur and idClan=:idClan');
            $quitterLeClan->execute([':idClan' => $idClan, ':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
            $_SESSION['clan'] = null;
        }
    }

    public function aUnClan () {
        
        if (isset($_SESSION['Utilisateur'])) {

            $idJoueurChoisi = $this->recuperetIdJoueur();
            $joueurAyantUnClan = self::$bdd->prepare('select nom from utilisateur natural join appartient where idUtilisateur=:idUtilisateur');
            $joueurAyantUnClan->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
            $aUnClan = $joueurAyantUnClan->fetch();

            if(isset($aUnClan['nom'])) {
                $_SESSION['clan'] = $this->recupereIdClan($idJoueurChoisi);
            }
       }
    }




}
?>