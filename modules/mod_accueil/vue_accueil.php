<?php

class VueAccueil extends VueGenerique{
    
    public function __construct() {
        parent::__construct();

    }

    public function accueil(){
        ?>
        <link rel="stylesheet" href="modules/mod_accueil/style_accueil.css">
             <div class="imageJeu">
            <img class="imageJeu1Size" src="images/images_accueil/imageJeu1.jpg" width="700" height="400"  alt="grec">
            <img class="imageJeu2Size" src="images/images_accueil/imageJeu2.jpeg" width="700" height="400"  alt="icardi">
        </div>
       

        <div class="avis">
            <h3>Avis :</h3>
        </div>

        <div class="videoJeu">     
            <iframe class="videoJeuSize" width="560" height="315" src="https://www.youtube.com/embed/O4r3aHR-4og?si=elZ_ZsQDJt_Zti0n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                
            
        </div>

        <div class="presentationJeu">
            <h3>PRESENTATION DU JEU :  </h3>
        </div>

        <div class="descriptionJeu">
            <img class="imageDescriptionJeuSize" src="image/jeu.png" alt="jeu">
            <h3 class="histoire">ICI ON RACONTE L'HISTOIRE DU JEU</h3>
        </div>
        

        <?php
    }





   
    public function getVue(){
        return $this;
    }

}
?>