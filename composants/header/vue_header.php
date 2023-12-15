<?php
class VueCompHeader extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '
            <div class="logo">
                <a href="">
                    <img src="image/home.png" alt="logo-home" width="35">
                </a>
                <a href="">
                    <img src="image/user.png" alt="logo-png" width="35">
                </a>
            </div>
            <h1>Space Tower Defense</h1>';
      
	}
	


}
