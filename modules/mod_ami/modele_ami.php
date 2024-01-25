<?php

require_once 'connexion.php';

class ModeleAmi extends Connexion {
    
    public function rechercherClan(){

        if(isset($_POST['recherche']) and !empty($_POST['recherche'])){
            $clanChercher = htmlspecialchars($_POST['recherche']);
            $nomClan = self::$bdd->prepare('SELECT nom FROM utilisateur WHERE nom LIKE :nom ');
            $nomClan->execute([':nom' => $clanChercher.'%']);
            return $nomClan->fetch(); 
         } 
         
    }

    public function recupereInfoClan () {
        $requeteClan = self::$bdd->query('SELECT nom FROM utilisateur ');
        return $requeteClan->fetchAll();
    }

    public function recuperetIdJoueur() {
           $nomJoueur = $_SESSION['Utilisateur'];
           $idJoueur = self::$bdd->prepare('Select idUtilisateur from utilisateur where nom=:nom');
           $idJoueur->execute([':nom' => $nomJoueur]);
           return $idJoueur->fetch();
    }

    public function recupereIdClan($idJoueurChoisi) {
            $idJoueur2 = self::$bdd->prepare('SELECT idUtilisateur2 FROM utilisateur INNER JOIN estamiavec ON utilisateur.idUtilisateur = estamiavec.idUtilisateur2 WHERE utilisateur.idUtilisateur = :idUtilisateur');

            $idJoueur2->execute([':idUtilisateur' => $idJoueurChoisi['idUtilisateur']]);
            return $idJoueur2->fetch(); 
    }

    public function ajouterJoueurAUClan () {

        if (isset($_GET['clan']) && isset($_SESSION['Utilisateur']) ) {

           $idClan = htmlspecialchars($_GET['clan']);
           $idJoueurChoisi = $this->recuperetIdJoueur();
           
           if (isset($_SESSION['clan'])) {
                return false;
           }

           else {
                $insertionJoueur = self::$bdd->prepare('Insert into estamiavec (idUtilisateur, idUtilisateur2) values (:idUtilisateur, :idClan)');
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

            $recupereInfoClan = self::$bdd->prepare('SELECT nom FROM utilisateur WHERE idUtilisateur = :idUtilisateur ');
            $recupereInfoClan->execute(['idClan' => $idClanChoisi['idUtilisateur']]);
            return $recupereInfoClan->fetch();
        }
    }

    public function infoJoueur () {
        if (isset($_SESSION['Utilisateur']) && isset($_SESSION['clan'])) {
            
            $idJoueurChoisi = $this->recuperetIdJoueur();
            $idClanChoisi = $this->recupereIdClan($idJoueurChoisi);

            $recupereInfoJoueur = self::$bdd->prepare('SELECT nom FROM utilisateur WHERE idUtilisateur=:idUtilisateur');
            $recupereInfoJoueur->execute(['idUtilisateur' => $idClanChoisi['idUtilistateur']]);
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