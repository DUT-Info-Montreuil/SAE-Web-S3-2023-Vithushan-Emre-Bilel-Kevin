<?php

class VueCompFooter extends VueCompGenerique {

    public function __construct() {
		$this->affichage .= '
            <link rel="stylesheet" href="composants/footer/style_footer.css">
            <div class="reseau">
                <a href=""><img src="images/images_footer/facebook.png" alt="facebook" width="35"></a>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <a href=""><img src="images/images_footer/x.png" alt="x" width="35"></a>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <a href=""><img src="images/images_footer/insta.png" alt="insta" width="35"></a>
            </div>
            <div class="LesPegi">
                <img class="pegi" src="images/images_footer/pegi.png" alt="pegi" width="45">
                <p>&nbsp;</p>
                <img class="pegiviolence" src="images/images_footer/pegiviolence.png" alt="pegiviolence" width="55">
            </div>
            <div class="uu">
                ©SPACETOWERDEFENSE 2024 . Tous droits réservés.
            </div>
        ';
      
	}
	
}