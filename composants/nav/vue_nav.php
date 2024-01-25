<?php
class VueCompNav extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="composants/nav/style_nav.css">
      
        <a class="navi" href="index.php?module=classement">CLASSEMENT</a>
        <a class="navi" href="index.php?module=support">SUPPORT</a>
        <a class="navi" href="index.php?module=">JOUER</a>
        <a class="navi" href="index.php?module=clan">CLAN</a>
        <a class="navi" href="index.php?module=guide">GUIDE</a>
        <a class="navi" href="index.php?module=ami">AMI</a>

 
    ';
	}
	


}
