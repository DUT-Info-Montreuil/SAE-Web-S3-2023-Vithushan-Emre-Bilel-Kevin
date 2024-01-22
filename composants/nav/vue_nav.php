<?php
class VueCompNav extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="composants/nav/style_nav.css">
          <a href="">Classement</a>
          <a href="index.php?module=support">Support</a>
          <a class="bjouer" href="">Jouer</a>
          <a href="clan.php">Clan</a>
          <a href="">guide</a>
        
    ';
	}
	


}
