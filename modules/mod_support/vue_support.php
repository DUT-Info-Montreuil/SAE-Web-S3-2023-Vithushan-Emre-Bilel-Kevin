<?php

class VueSupport extends VueGenerique{
	public function __construct () {
		parent::__construct();

	}

	public function afficheFaq(){
		?>
		<h1>FAQ</h1>
		<?php
	}

	public function afficheListeFaq ($q,$r) {
		?>
		<link rel="stylesheet" href="modules/mod_support/style_support.css">
		
		<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
			<div class ="QuestionReponse">
				<h2><li><?=$q?></h2>
				<p><?=$r?></p>
			</div>
		</div>
        <?php
	}
	
	
    public function contact () {
		?>
		<link rel="stylesheet" href="modules/mod_support/style_support.css">
        <h1> Contactez-Nous</h1>
		<p>Disponibles de 9h a 18h du lundi au vendredi</p>	
		<div class="row">
      		<div class="col">
				<img src="images/images_support/tel.png" alt="logo-tel" width="50">
				<br>
				Par Telephone
				<br>
				Au 00 00 00 00 00 .
			</div>
      		<div class="col">
				<img src="images/images_support/lettre.png" alt="logo-lettre" width="50">
				<br>
				Par Mail
				<br>
				A adresse@mail.com .
			</div>
    	</div>
		<?php
	}
	
}
