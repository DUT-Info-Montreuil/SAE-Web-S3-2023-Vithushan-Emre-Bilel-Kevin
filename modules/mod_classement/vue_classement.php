<?php

class VueClassement extends VueGenerique{
    
    public function __construct() {
        parent::__construct();

    }

   

    public function afficheJoueur($compteur,$login,$score) {
        ?>
         <tr>
        <th scope="row">
            <?=$compteur?>  
        </th>
        <td>
            <?=$login?>
        </td>
        <td>
            <?=$score?>
        </td>
        </tr>
        <?php
	}

    public function afficheJoueurLigne ($liste) {
        $compteur = 1;
        foreach ($liste as $joueur) {
			$login = isset($joueur["login"]) ? $joueur["login"] : "";
			$score = isset($joueur["score"]) ? $joueur["score"] : "";
			$this->afficheJoueur($compteur,$login,$score);
            $compteur++;
		}
	}

	

    public function afficheTableScore($liste){
        ?>
        <div class= container>
            <table class="table tablescore">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Score</th>
                    </tr>
                </thead>
                <tbody>
                      
                        <?php $this->afficheJoueurLigne($liste) ?>
                    
                </tbody>
            </table>


    </div>

        <?php


    }

    

    public function getVue(){
        return $this;
    }

}
?>