<?php


class ModeleConnexion extends Connexion {
    
    public function __construct() {
    }

    public function ajouterUtilisateur ($login,$mdp){
        $pwhash = password_hash($mdp,PASSWORD_DEFAULT);

        $query = "INSERT INTO connection (mail,mdp) values (:logi,:pw)";
        $stmt = self::$bdd->prepare($query);
        $stmt->bindParam(':logi',$login);
        $stmt->bindParam(':pw',$pwhash);
        $stmt->execute();
        echo 'salut <br>' . $login;
    }


    public function connexion_utilisateur(){
            
        $clog = isset($_POST['nom2']) ? $_POST['nom2'] : null;
        $cmdp = isset($_POST['mdp2']) ? $_POST['mdp2'] : null;
      
        
        $query = self::$bdd->prepare("SELECT mail,mdp FROM connection WHERE mail = :clog");
        $query -> bindValue(':clog', $clog);
        $query -> execute();
        $result = $query->fetch();
        $logi = $result['mail'];
        $pwhash = $result['mdp'];

        if ($logi != NULL){
            if (password_verify($cmdp,$pwhash)){
                $_SESSION['Utilisateur'] = $logi;
                echo'<br>vous etes connecter<br>';
            return password_verify($cmdp,$pwhash);
            }
            else {
            echo 'Mot de passe incorrect';
            }
        }
        else {
        echo 'Login incorrect';
        }
    
    }

    public function deconnexion(){
        unset($_SESSION['Utilisateur']);
        session_destroy();
    }

}

?>