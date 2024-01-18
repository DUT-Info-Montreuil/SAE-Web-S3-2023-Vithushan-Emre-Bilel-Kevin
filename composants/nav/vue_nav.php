<?php
class VueCompNav extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '
    <link rel="stylesheet" href=".//style.css">
        <a href="">Classement</a>
        <a href="index.php?module=support">Support</a>
        <a class="test" href="">Jouer</a>
        <a href="clan.php">Clan</a>
        <a href="">guide</a>';
      
	}
	


}
