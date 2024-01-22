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
            <img src="images/images_header/user.png" alt="Connexion" onclick="toggleLiens()" width="35">
          </a>
        </div>
        <h1 class="titre_header">Space Tower Defense</h1>
        <div class="lienContainer" style="display:none;">
          <a class="lien1" href="index.php?module=mod1">Connection</a>
          <a class="lien2" href="index.php?module=mod2">Inscription</a>
        </div>
   
    ';
            
                  
    
   
    


}
}
?>