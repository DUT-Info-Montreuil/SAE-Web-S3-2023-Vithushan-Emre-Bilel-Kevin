<?php

require_once 'vue_composant_generique.php';


class VueCompFooter extends VueCompGenerique {

    public function __construct() {
		$this->affichage .= '
        <link rel="stylesheet" href="composants/footer/style_footer.css">
        <div class="reseau">
        <p>SUIVEZ NOUS</p>
        <a href=""><img src="images/images_footer/facebook.png" alt="facebook" width="35"></a>
        <a href=""><img src="images/images_footer/x.png" alt="x" width="35"></a>
        <a href=""><img src="images/images_footer/insta.png" alt="insta" width="35"></a>
    </div>
    <div class="droitEtPrevention">
        <img class="imagePreventionSize" src="images/images_footer/pegi.png" alt="pegi" width="35">
        <p>© 2024 . Tous droits réservés.</p>
    </div>';
      
	}
	
}