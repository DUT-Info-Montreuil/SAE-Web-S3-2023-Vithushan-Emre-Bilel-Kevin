<?php

class VueSupport extends VueGenerique{
	public function __construct () {
		parent::__construct();

	}

	


    public function listefaq ($tab_faq) {
		?>
        <h1>FAQ</h1>
        <ul>
        <?php
		foreach ($tab_faq as $faq) {
			?><li><a href="index.php?module=support&action=faq&id=<?=$faq["idQuestionReponse"]?>"><?=$faq["reponse"]?></a></li><?php
		}
		?></ul><?php
	}
	
}
