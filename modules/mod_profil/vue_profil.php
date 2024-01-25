<?php

class VueProfil extends VueGenerique{
    
    public function __construct() {
        parent::__construct();
        ?>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="modules/mod_profil/style_profil.css">
        <?php
    }

    public function profil($t){
        echo 'bonjour  '.$_SESSION['Utilisateur'].'<br>' ;
        echo 'Vous etes niveau'.$t;
    }

    public function test($t , $clan){
       
        ?>
         <div class="container light-style flex-grow-1 container-p-y profil">
        <h4 class="font-weight-bold py-3 mb-4">
            Profil
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-mail">Change mail</a>    
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="pp">
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" value="<?= $t['login'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="<?= $t['nom'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="<?= $t['adressemail'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <?php
                                        echo '<form method="post" action="index.php?module=profil&&action=changeMDP">';
                                        echo 'Ancien Mot de passe <br>';
                                        echo '<input type="password" name="ancienMDP"><br>';
                                        echo 'Nouveau Mot de passe <br>';
                                        echo '<input type="password" name="newMDP"><br>';
                                        echo 'Resaisissez le Mot de passe <br>';
                                        echo '<input type="password" name="newMDP2"><br>';
                                        echo '<input type="submit" value="Valider">';
                                        echo '</form>';
                                    ?>
                                </div>
                            </div>        
                            
                        </div>
                        <div class="tab-pane fade" id="account-change-mail">
                            
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <?php
                                        echo '<form method="post" action="index.php?module=profil&&action=changeMail">';
                                        echo 'Votre Mot de passe <br>';
                                        echo '<input type="password" name="motDePasse"><br>';
                                        echo 'Changer votre mail <br>';
                                        echo '<input type="text" name="newMail"><br>';
                                        echo 'Resaisissez le nouveau mail <br>';
                                        echo '<input type="text" name="newMail2"><br>';
                                        echo '<input type="submit" value="Valider">';
                                        echo '</form>';
                                    ?>
                                </div>
                            </div>        
                            
                        </div>

                        <div class="tab-pane fade" id="account-info">
                                <div class="form-group">
                                    <label class="form-label">Votre niveau :</label>
                                    <input type="text" class="form-control mb-1" value="<?= $t['niveau']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Votre clan :</label>
                                    <input type="text" class="form-control mb-1" value="<?= $c = isset($clan['nom']) ? $clan['nom'] : 'vous avez pas de clan'; ?>">
                                </div>

                        
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
        <?php    

    }

    public function getVue(){
        return $this;
    }

}
?>