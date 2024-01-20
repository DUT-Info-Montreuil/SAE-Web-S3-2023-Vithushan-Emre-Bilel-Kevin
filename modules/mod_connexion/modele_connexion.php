<?php


class ModeleConnexion extends Connexion {
    
    public function __construct() {
    }

    public function ajouterUtilisateur (){

        $clogin = isset($_POST['loginIn']) ? $_POST['loginIn'] : null;
        $cmdp = isset($_POST['mdpIn']) ? $_POST['mdpIn'] : null;
        $cmail = isset($_POST['mailIn']) ? $_POST['mailIn'] : null;
      
        $pwhash = password_hash($cmdp,PASSWORD_DEFAULT);

        $query = "INSERT INTO utilisateur (login,nom,motdepasse,adressemail,niveau,argentUtilisateur,commentaire) values (:clogin,:clogin,:cmdp,:cmail,1,0,'')";
        $stmt = self::$bdd->prepare($query);
        $stmt->bindParam(':clogin',$clogin);
        $stmt->bindParam(':cmdp',$pwhash);
        $stmt->bindParam(':cmail',$cmail);
        $stmt->execute();
        echo 'salut <br>' . $clogin;
    }


    public function connexion_utilisateur(){
            
        $clogin = isset($_POST['loginCo']) ? $_POST['loginCo'] : null;
        $cmdp = isset($_POST['mdpCo']) ? $_POST['mdpCo'] : null;
      
        
        $query = self::$bdd->prepare("SELECT login,motdepasse FROM utilisateur WHERE login = :clogin");
        $query -> bindValue(':clogin', $clogin);
        $query -> execute();
        $result = $query->fetch();
        if ($result !== false) {
            $clogin = $result['login'];
            $pwhash = $result['motdepasse'];
        } else {
            echo 'Aucun utilisateur trouvé avec ce login.';
        }
        if ($clogin != NULL){
            if (password_verify($cmdp,$pwhash)){
                $_SESSION['Utilisateur'] = $clogin;
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