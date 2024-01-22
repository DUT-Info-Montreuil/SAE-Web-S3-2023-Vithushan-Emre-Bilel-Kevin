<?php

require_once 'connexion.php';

class ModeleClan extends Connexion {
    
    public function rechercherClan(){
        if(isset($_POST['recherche']) and !empty($_POST['recherche'])){
            $clanChercher = htmlspecialchars($_POST['recherche']);
            $nomClan = self::$bdd->query('SELECT * FROM clan WHERE nom LIKE "'.$clanChercher.'%" ');
            
            if($nomClan->rowCount()>0){
                while($i = $nomClan->fetch()){
                    ?>
                    <p><?php echo $i['nom']; ?></p>
                    <?php
                } 
            }else{
                ?>
                <p>Aucun Clan trouvé</p>
                <?php
            }
            
         }
         
    }

    

}

?>