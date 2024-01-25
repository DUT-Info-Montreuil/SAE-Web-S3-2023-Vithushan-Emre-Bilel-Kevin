<?php
class VueCompNav extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '
      <link rel="stylesheet" href="composants/nav/style_nav.css">
      
        <a class="navi" href="index.php?module=classement">CLASSEMENT</a>
        <a class="navi" href="index.php?module=support">SUPPORT</a>
        <a class="navi" href="SpaceTowerDefense.zip" download="SpaceTowerDefense.zip">JOUER</a>
        <a class="navi" href="index.php?module=clan">CLAN</a>
        <a class="navi" href="index.php?module=guide">GUIDE</a>
 
    ';
	}
	


}
