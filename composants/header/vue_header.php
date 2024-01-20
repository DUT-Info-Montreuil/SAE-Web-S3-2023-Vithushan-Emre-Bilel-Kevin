<?php
class VueCompHeader extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '   
        
        <script src=".//script.js"></script>
        <link rel="stylesheet" href="composants/header/style_header.css">
        <div class="logo">
          <a href="index.php?module=accueil">
            <img src="images/images_header/home.png" alt="logo-home" width="35">
          </a>
          <a href="">
            <img src="images/images_header/user.png" alt="Connexion" width="35"  onclick="toggleLiens()">
          </a>
        </div>
        <div id="liensContainer" style="display: none;">';
        
        if(isset($_SESSION['Utilisateur'])){
          $this->affichage .= '<a class="lien1" href="index.php?module=connexion&&action=deconnexion">Deconnexion</a>';                     
        }else {
          $this->affichage .='<a class="lien1" href="index.php?module=connexion&&action=form_connexion">Connection</a>';
          $this->affichage .='<a class="lien2" href="index.php?module=connexion&&action=form_inscription">Inscription</a>';
        }    
          

          $this->affichage .= '  
        </div>
   
    ';
            
                  
    
   
    


}
}
?>