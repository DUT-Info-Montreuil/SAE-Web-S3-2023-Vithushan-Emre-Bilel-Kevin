<?php
class VueCompHeader extends VueCompGenerique {
    
    public function __construct() {
		$this->affichage .= 
    
    '   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="composants/header/style_header.css">
        <script src=".//script.js"></script>
        
        <div class="logo">
          <a href="index.php?module=accueil">
            <img src="images/images_header/home.png" alt="logo-home" width="35">
          </a>
          <a href="">
            <img src="images/images_header/user.png" alt="Connexion" width="35"  onclick="toggleLiens()">
          </a>
        </div>
        <div class=" container titre">
          <img src="images/images_accueil/titre-removebg-preview.png" class="img-fluid" alt="Titre" >
        </div>


        <div id="liensContainer" style="display: none;">';
        if(isset($_SESSION['Utilisateur'])){
          $this->affichage .= '<a class="lien1" href="index.php?module=connexion&&action=deconnexion">Deconnexion</a>';
          $this->affichage .= '<a class="lien1" href="index.php?module=profil&&action=profil">Profil</a>';                     
        }else {
          $this->affichage .='<a class="lien1" href="index.php?module=connexion&&action=form_connexion">Connection</a>';
          $this->affichage .='<a class="lien2" href="index.php?module=connexion&&action=form_inscription">Inscription</a>';
        }    
          
          $this->affichage .= '  
        </div>
   
    ';
            
                  
    
   
    


}
}
?>