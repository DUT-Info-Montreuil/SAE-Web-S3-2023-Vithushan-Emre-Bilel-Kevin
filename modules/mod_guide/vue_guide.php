<?php

class VueGuide extends VueGenerique{
    public function __construct () {
        parent::__construct();

    }

    public function affiche_liste_tours() {
        ?>
        <link rel="stylesheet" href="modules/mod_guide/style_guide.css">
        <h1 class="premiertitre">Page guide</h1>
        <h3 class="titre">Les différents types de tours</h3>
        <h4 class="titre">Les tours normales</h4>
        <p class="sous-titre">Ce sont des tours possédants des attributs et des attaques basiques définie en fonction de leur capacitées</p><br>
        <div class="divBootGenerale">
        <div class="row">
            <div class="col-2">
                <div class="list-group"  id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-simple-list" data-bs-toggle="list" href="#list-simple" role="tab" aria-controls="list-simple">Tour Simple</a>
                    <a class="list-group-item list-group-item-action" id="list-rapide-list" data-bs-toggle="list" href="#list-rapide" role="tab" aria-controls="list-rapide">Tour Tirs-Rapides</a>
                    <a class="list-group-item list-group-item-action" id="list-missile-list" data-bs-toggle="list" href="#list-missile" role="tab" aria-controls="list-missile">Tour Missile</a>
                    <a class="list-group-item list-group-item-action" id="list-laser-list" data-bs-toggle="list" href="#list-laser" role="tab" aria-controls="list-laser">Tour Laser</a>
                    <a class="list-group-item list-group-item-action" id="list-bombe-list" data-bs-toggle="list" href="#list-bombe" role="tab" aria-controls="list-bombe">Tour Bombe</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active divDesc" id="list-simple" role="tabpanel" aria-labelledby="list-simple-list"><div class="dispflex"><div class="div2"><img class="imageList" src="images/images_guide/mitraillette-sur-pied.jpg" /></div><div class="div3"><p>C'est juste une tour simple</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-rapide" role="tabpanel" aria-labelledby="list-rapide-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/tour-rapide.png" /></div><div class="div3"><p>Cette tour révolutionnaire a pour spécialité le tir rapide, vous permettant de déchaîner une salve incessante de projectiles sur vos adversaires.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-missile" role="tabpanel" aria-labelledby="list-missile-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/mitraillette-sur-pied.jpg" /></div><div class="div3"><p>Cette tour exceptionnelle tire des missiles, transformant chaque bataille en un spectacle pyrotechnique impressionnant. Grâce à sa spécialité unique, la Tour Missile offre une portée étendue, une précision redoutable et une capacité à infliger des dégâts massifs à vos adversaires.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-laser" role="tabpanel" aria-labelledby="list-laser-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/mitraillette-sur-pied.jpg" /></div><div class="div3"><p>Cette tour avant-gardiste est spécialement conçue pour libérer un faisceau de lasers continu, offrant une dévastation instantanée à vos ennemis. Sa spécialité réside dans la précision inégalée et la constance de ses tirs, transformant chaque bataille en un ballet lumineux hypnotique.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-bombe" role="tabpanel" aria-labelledby="list-bombe-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/mitraillette-sur-pied.jpg" /></div><div class="div3"><p>Spécialisée dans les dégâts de zone, cette tour vous permet de semer le chaos parmi vos adversaires en déclenchant des explosions stratégiques. Chaque tir de la Tour Bombe crée une zone d'impact dévastatrice, neutralisant habilement les ennemis regroupés.</p></div></div></div>
                </div>
            </div>
        </div>
        </div>
        <h4 class="titre">Les tours Spéciales </h4>
        <p class="sous-titre">Ce sont des tours qui se démarquent des tours normales grâce au fait qu'elles peuvent laisser des "effets" qui durent plusieurs tours sur leurs cibles. Mais attention ! Ces tours ne peuvent pas attaquer les ennemis trop proche d'elles et ces tours ne peuvent cibler que certains types d'ennemis en particulier</p><br>
        <div class="divBootGenerale">
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-feu-list" data-bs-toggle="list" href="#list-feu" role="tab" aria-controls="list-feu">Tour de Feu</a>
                    <a class="list-group-item list-group-item-action" id="list-gel-list" data-bs-toggle="list" href="#list-gel" role="tab" aria-controls="list-gel">Tour de Gel</a>
                    <a class="list-group-item list-group-item-action" id="list-poison-list" data-bs-toggle="list" href="#list-poison" role="tab" aria-controls="list-poison">Tour de Poison</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active divDesc" id="list-feu" role="tabpanel" aria-labelledby="list-feu-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/tour-feu.png" /></div><div class="div3"><p>La tour feu est une véritable forge de destruction embrasée ! Sa spécialité réside dans la capacité à lancer des projectiles enflammés, infligeant non seulement des dégâts immédiats à vos adversaires, mais aussi à les plonger dans les flammes dévorantes de la destruction continue.  La Tour Feu offre une stratégie unique, combinant des attaques percutantes avec des effets persistants de brûlure, forçant vos ennemis à reculer ou à subir les conséquences incendiaires.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-gel" role="tabpanel" aria-labelledby="list-gel-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/tour-gel.png" /></div><div class="div3"><p>Cette tour exceptionnelle est maîtresse dans l'art du gel, tirant des projectiles de glace aussi dévastateurs que paralysants. Sa spécialité réside dans la capacité à infliger des dégâts tout en immobilisant vos ennemis, créant ainsi un avantage tactique indéniable. Chaque tir de la Tour Glace propage une aura de froid intense, gelant les adversaires sur place et les forçant à subir les conséquences du gel persistant. Utilisez cette technique glaciale pour ralentir les mouvements de vos ennemis, bloquer des voies stratégiques et prendre le contrôle du champ de bataille à votre rythme.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-poison" role="tabpanel" aria-labelledby="list-poison-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/tour-poison.png" /></div><div class="div3"><p> C'est une arme perfide conçue pour semer le chaos et la détresse chez vos ennemis ! Sa spécialité réside dans la libération de projectiles empoisonnés, des attaques non seulement dévastatrices mais aussi sournoises. Chaque tir de la Tour de Poison injecte un venin mortel, infligeant des dégâts initiaux et déclenchant un effet d'empoisonnement insidieux. L'empoisonnement continu provenant de la Tour de Poison garantit que vos adversaires subissent des dégâts croissants au fil du temps, les forçant à faire face à une agonie inexorable. </p></div></div></div>
                </div>
            </div>
        </div>
        </div>



    <?php }

    public function affiche_liste_ennemis() {
        ?>
        <h3 class="titre">Les différents types d'ennemis</h3>
        <h4 class="titre">Les Zentaris</h4>
        <p class="sous-titre">Ce sont les aliens qui, à la différence de nous les humains, ils peuvent vivre et se mouvoir sans problème dans l'espace sans equipement spécial, bien qu'ils n'ont pas l'air très puissant a première vue, certains d'entre eux sont de véritables monstre</p><br>
        <div class="divBootGenerale">
        <div class="row">
            <div class="col-2">
                <div class="list-group"  id="list-tab2" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-alien-list" data-bs-toggle="list" href="#list-alien" role="tab" aria-controls="list-alien">Soldat Zentari</a>
                    <a class="list-group-item list-group-item-action" id="list-general-list" data-bs-toggle="list" href="#list-general" role="tab" aria-controls="list-general">Général Zentari</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active divDesc" id="list-alien" role="tabpanel" aria-labelledby="list-alien-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/soldat-extra.png" /></div><div class="div3"><p>Les Soldats Zentari émergent comme des guerriers mystérieux d'une race jadis pacifique. Leur physiologie bioluminescente et leurs armures évoluées dénotent une adaptation étonnante, révélant une force mesurée malgré leur apparence redoutable. Agiles et tactiques, ces combattants extraterrestres privilégient la stratégie à la brutalité.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-general" role="tabpanel" aria-labelledby="list-general-list"><div class="dispflex"> <div class="div2"><img class="imageList" src="images/images_guide/candy.png" /></div><div class="div3"><p>Les généraux Zentari, des êtres cosmiques d'une splendeur épique, se dressent comme les titans ultimes de la galaxie lointaine. Leurs silhouettes élancées, ornées d'armures incrustées de cristaux aux reflets iridescents, dégagent une aura de puissance transcendante. Chacun d'entre eux porte sur ses épaules la responsabilité colossale de diriger la race élitiste des Zentaris dans une quête implacable de conquête. Leurs yeux perçants, éclairés par une intelligence extraterrestre, sondent l'univers avec une détermination féroce.</p></div></div></div>
                </div>
            </div>
        </div>
        </div>
        <h4 class="titre">Les vaisseaux ennemis</h4>
        <p class="sous-titre">C'est la fierté Zentari et la plus puissante flotte aérienne de la galaxie. Leurs appareils disposent des meilleurs technologies et sont pilotées par des pilotes d'exeption</p><br>
        <div class="divBootGenerale">
        <div class="row">
            <div class="col-2">
                <div class="list-group" id="list-tab2" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-vsimple-list" data-bs-toggle="list" href="#list-vsimple" role="tab" aria-controls="list-vsimple">Vaisseau Simple</a>
                    <a class="list-group-item list-group-item-action" id="list-vrapide-list" data-bs-toggle="list" href="#list-vrapide" role="tab" aria-controls="list-vrapide">Vaisseau Rapide</a>
                    <a class="list-group-item list-group-item-action" id="list-vtank-list" data-bs-toggle="list" href="#list-vtank" role="tab" aria-controls="list-vtank">Vaisseau Tank</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active divDesc" id="list-vsimple" role="tabpanel" aria-labelledby="list-vsimple-list"><div class="dispflex"><div class="div2"><img class="imageList" src="images/images_guide/vaisseau-simple.png"/></div><div class="div3"><p>Les vaisseaux simples des Zentari, symboles de l'ingéniosité technologique qui transcende l'entendement humain, sillonnent l'espace intersidéral avec une élégance mortelle. Leurs coques lisses, façonnées dans un alliage extraterrestre aux reflets prismatiques, évoquent une esthétique futuriste qui défie les lois de la physique. Chaque vaisseau, habité d'une lueur éthérée, semble être une extension organique de la volonté collective des Zentari. Leurs moteurs gravitationnels, capables de distorsions spatio-temporelles, propulsent ces engins avec une vélocité stupéfiante, défiant toute logique humaine.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-vrapide" role="tabpanel" aria-labelledby="list-vrapide-list"><div class="dispflex"><div class="div2"><img class="imageList" src="images/images_guide/vaisseau-rapide.png" /></div><div class="div3"><p>Les vaisseaux rapides des Zentari, émissaires de l'éclair dans l'obscurité interstellaire, incarne la vitesse elle-même. Leurs formes fuselées, revêtues d'une technologie furtive qui défie les radars conventionnels, évoquent l'idée d'une trajectoire irrésistible à travers le vide cosmique. Dotés de propulseurs hyperspatiaux éthérés, ces vaisseaux serpentent à travers les galaxies avec une agilité déconcertante, laissant dans leur sillage des traînées lumineuses qui témoignent de leur passage éphémère. Chaque vaisseau rapide Zentari est une manifestation de la vitesse pure, échappant aux contingences du temps et de l'espace, et capable d'émerger soudainement dans n'importe quel secteur de la galaxie.</p></div></div></div>
                    <div class="tab-pane fade divDesc" id="list-vtank" role="tabpanel" aria-labelledby="list-vtank-list"><div class="dispflex"><div class="div2"><img class="imageList" src="images/images_guide/vaisseau-tank.png" /></div><div class="div3"><p>Les vaisseaux tank des Zentari, monuments impénétrables de la puissance militaire extraterrestre, dominent les cieux cosmiques avec une présence imposante. Leurs coques massives, forgées à partir d'une alliage inconnu d'une robustesse inégalée, semblent défier toute tentative de perforation. Équipés de générateurs de boucliers quantiques, ces colosses spatiaux absorbent et encaissent les projectiles adverses avec une aisance déconcertante.</p></div></div></div>
                </div>
            </div>
        </div>
        </div>



    <?php }

    public function affiche_guide_fichier () {
        ?>


        <h3 class="titre">Guide du jeu</h3>
        <p class="sous-titre">Voici un guide plus avancé vous permettant de découvrir le jeu avec des détails sur les différentes tours, les ennemis et le gameplay dans toute sa grandeur :</p>
        <div class="boutonguide"><a class="btn btn-primary" href="https://localhost/SaeDevWebS3/SpaceTowerDefense.pdf" download="SpaceTowerDefense_Guide.pdf"> Téléchargez le guide ici </a></div>
        

        <?php
    }

}

?>