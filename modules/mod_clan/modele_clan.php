<?php

require_once 'connexion.php';

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

    public function ajouterJoueurAUClan () {

        if (isset($_GET['clan'])) {

           $idClan = htmlspecialchars($_GET['clan']);
           $nomJoueur = $_SESSION['Utilisateur'];
           $idJoueur = self::$bdd->prepare('Select idUtilisateur from utilisateur where nom=:nom');
           $idJoueur->execute([':nom' => $nomJoueur]);
           $idJoueurChoisi = $idJoueur->fetch();

           $joueurAyantUnClan = self::$bdd->prepare('select nom from utilisateur natural join appartient where idUtilisateur=:idUtilisateur');
           $joueurAyantUnClan->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
           $aUnClan = $joueurAyantUnClan->fetch();

           if(isset($aUnClan['nom'])) {
                echo 'vous avez déjà un clan';
                sleep(2);
           }

           else {
                $insertionJoueur = self::$bdd->prepare('Insert into appartient (idUtilisateur, idClan) values (:idUtilisateur, :idClan)');
                $insertionJoueur->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur'], ':idClan' => $idClan]);
           }

        }
    }

    public function informationAfficherMonClan () {

        if (isset($_SESSION['Utilisateur'])) {

            $nomJoueur = $_SESSION['Utilisateur'];
            $idJoueur = self::$bdd->prepare('Select idUtilisateur from utilisateur where nom=:nom');
            $idJoueur->execute([':nom' => $nomJoueur]);
            $idJoueurChoisi = $idJoueur->fetch();

            $idClan = self::$bdd->prepare('select idClan from clan INNER JOIN appartient USING(idClan) WHERE idUtilisateur=:idUtilisateur');
            $idClan->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
            $idClanChoisi = $idClan->fetch(); 

            $recupereInfoClan = self::$bdd->prepare('SELECT SUM(argentUtilisateur) as totalArgent, COUNT(*) as nombreDeJoueur, idClan, c.nom from clan c INNER JOIN appartient USING(idClan) INNER JOIN utilisateur USING(idUtilisateur) where idClan=:idClan');
            $recupereInfoClan->execute(['idClan' => $idClanChoisi['idClan']]);
            return $recupereInfoClan->fetch();
        }
    }

    public function infoJoueur () {
        if (isset($_SESSION['Utilisateur'])) {
            $nomJoueur = $_SESSION['Utilisateur'];
            $idJoueur = self::$bdd->prepare('Select idUtilisateur from utilisateur where nom=:nom');
            $idJoueur->execute([':nom' => $nomJoueur]);
            $idJoueurChoisi = $idJoueur->fetch();

            $idClan = self::$bdd->prepare('select idClan from clan INNER JOIN appartient USING(idClan) WHERE idUtilisateur=:idUtilisateur');
            $idClan->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
            $idClanChoisi = $idClan->fetch();

            $recupereInfoJoueur = self::$bdd->prepare('SELECT u.nom, argentUtilisateur, niveau FROM utilisateur u INNER JOIN appartient USING (idUtilisateur) INNER JOIN clan USING (idClan) WHERE idClan=:idClan');
            $recupereInfoJoueur->execute(['idClan' => $idClanChoisi['idClan']]);
            return $recupereInfoJoueur->fetchAll();
        }
    }

}
?>