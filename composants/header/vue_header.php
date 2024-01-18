<?php
class VueCompHeader extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '
        <script src="script.js"></script>
        <link rel="stylesheet" href=".//style.css">
            <div class="logo">
                <a href="index.php?module=accueil">
                    <img src="images/images_header/home.png" alt="logo-home" width="35">
                </a>
                <a href="">
                    <img src="images/images_header/user.png" alt="Connexion"  width="35" onclick="toggleLiens()">
                </a>
            
                
                
                                

                                ';

                                

                        
    }
	


}
