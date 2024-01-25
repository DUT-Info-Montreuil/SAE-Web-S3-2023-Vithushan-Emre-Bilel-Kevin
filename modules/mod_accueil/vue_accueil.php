<?php

class VueAccueil extends VueGenerique{
    
    public function __construct() {
        parent::__construct();
        ?>
            <link rel="stylesheet" href="modules/mod_accueil/style_accueil.css">
        <?php

    }

    public function accueil(){
        ?>

        <div id="carouselExampleAutoplaying" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/images_accueil/imageaccueil.png" class="d-block w-100" alt="img1">
                </div>
                <div class="carousel-item">
                    <img src="images/images_accueil/imageaccueil1.png" class="d-block w-100" alt="img2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>    
        </div>
        
        <div class="container-fluid avis">
            <img src="images/images_accueil/Avisb.png" class="d-block w-100" alt="imgavis">
        </div>
        
        <div class="container videoJeu">     
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CMmoouqvjmg?si=wN2pALM-61opldfm" title="YouTube video player" class="videoJeuSize" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        </div>

        <div class="container presentationJeu ">
            <p>
                En l'an 2250, l'humanité a conquis les étoiles, établissant des colonies à travers le système solaire. La Coalition Terrestre, un gouvernement unifié de toutes les planètes humaines, a construit le Réseau Hyperion, une série de stations spatiales servant à la fois de centres de recherche et de postes de défense contre les menaces venues des profondeurs inconnues de l'espace.
                L'une de ces avant-postes, la Station Atlas, orbite autour d'une exoplanète riche en ressources mais instable, à la limite de l'espace exploré par l'homme. La Station Atlas n'est pas seulement un symbole de l'ingéniosité et de l'exploration humaine, mais aussi la première ligne de défense contre les Zentaris, une race extraterrestre mystérieuse dont la technologie surpasse de loin la nôtre.
                Les Zentaris, autrefois commerçants pacifiques, sont devenus agressifs, lançant des attaques non provoquées sur les territoires humains. Personne ne sait pourquoi ils ont changé ou ce qu'ils veulent, mais leurs attaques sont implacables et de plus en plus coordonnées.
                En tant que nouveau commandant de la Station Atlas, vous êtes chargé de défendre l'avant-poste et, par extension, la sécurité de la frontière de l'humanité. Avec accès aux dernières technologies militaires humaines, incluant des tours à missiles, des grilles laser et des drones assistés par IA, vous devez repousser les forces Zentari.
                Chaque vague d'attaquants extraterrestres est une énigme, et la station est votre échiquier.
                Positionnez vos défenses, améliorez votre arsenal et adaptez vos stratégies, car les Zentari évoluent avec chaque assaut. Ils apprennent de leurs défaites, et vous devez en faire autant.
                Le destin de l'expansion humaine dans les étoiles est entre vos mains. Tiendrez-vous la ligne contre l'assaut extraterrestre ou les Zentaris submergeront-ils le dernier bastion de l'espoir humain? Le Réseau Hyperion dépend de votre succès ; sans la Station Atlas, le réseau tombera et l'humanité sera repoussée dans son berceau sur Terre, ne jamais atteindre à nouveau les étoiles.
                Votre voyage sera l'un de courage, de génie stratégique et de résilience. 
                <br>
                "Commandement Hyperion : Station Atlas" – votre histoire, votre héritage.
            </p>
        </div>

        <?php
    }

    public function getVue(){
        return $this;
    }

}
?>