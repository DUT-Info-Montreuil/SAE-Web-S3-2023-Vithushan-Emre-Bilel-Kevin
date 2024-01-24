<?php


class ModeleProfil extends Connexion {
    
    public function __construct() {
    }

    public function afficherNiveau(){
        $nomUtilisateur = $_SESSION['Utilisateur'];
        $query = self::$bdd->prepare('SELECT niveau FROM utilisateur WHERE nom = :nom');
        $query->execute(['nom' => $nomUtilisateur]);
        $resultat = $query->fetch(PDO::FETCH_ASSOC);
        if ($resultat) {
        $niveau = $resultat['niveau'];
        return $niveau;
        } else {
        echo 'Utilisateur non trouvé';
        return false;
        }
    }


    public function infoJoueur(){
        $nomUtilisateur = $_SESSION['Utilisateur'];   
        $nomLogin = self::$bdd->prepare('SELECT * FROM utilisateur WHERE nom = :nom');
        $nomLogin->execute(['nom' => $nomUtilisateur]);
        $resultat = $nomLogin->fetch(PDO::FETCH_ASSOC);
        if (!$resultat) {
            echo 'Utilisateur non trouvé';
        } 

        return $resultat;



        
    }


    public function changerLeMdp(){
        $AncienMdp = isset($_POST['ancienMDP']) ? $_POST['ancienMDP'] : null;
        $user = $this->infoJoueur();
        $pwhash = $user['motdepasse'];
        $newMdp = isset($_POST['newMDP']) ? $_POST['newMDP'] : null;
        $newMdp2 = isset($_POST['newMDP2']) ? $_POST['newMDP2'] : null;

        if (password_verify($AncienMdp,$pwhash) AND !empty($newMdp) AND !empty($newMdp2)){
            if($newMdp === $newMdp2){
                $newMdpHash = password_hash($newMdp,PASSWORD_DEFAULT);

                $requeteUpdate = self::$bdd->prepare('UPDATE utilisateur SET motdepasse = :newMdp WHERE nom = :nomUtilisateur');

                $requeteUpdate->execute(['newMdp' => $newMdpHash,'nomUtilisateur' => $user['nom']]);

                echo 'Le mot de passe à était modifié avec succés';

            }
            else{
                ?>
                <p><?= "Vous avez pas ecrit deux fois le même nouveau mot de passe" ?></p>
                <?php
            }
            
        }
        else{
            ?>
                <p><?= "Mot de passe incorect" ?></p>
            <?php
            
        }

        
    }



}

?>