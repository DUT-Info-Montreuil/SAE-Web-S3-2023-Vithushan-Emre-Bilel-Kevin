
<?php

require_once "connexion.php";
require_once "site.php";
require_once "vue_generique.php";
require_once "module_generique.php";
require_once "vue_generique.php";
require_once "composant_generique.php";
require_once "vue_composant_generique.php";

require_once "composants/header/cont_header.php";
require_once "composants/header/vue_header.php";

require_once "composants/footer/composant_footer.php";
require_once "composants/header/composant_header.php";

Connexion::init_connexion();
$site = new Site();
$site->exec_module();

$header = new ComposantHeader();
//$nav = new ComposantNav();
$footer = new ComposantFooter();


$module_html = $site->get_module()->get_affichage();
include_once "template.php";

