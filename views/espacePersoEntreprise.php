        <main>
            
            <div class="container-espace-perso">
                
                <h2 class="h2">Bienvenue dans votre espace personnel !</h2>
            
                <div class="options">

                <div class="section1">

                    <div class="info card-options">
                        <h3 class="h3">informations personnelles</h3>
                        <form action="" class="form">
                            <input type="text" name="nom" value="<?php echo $data->nom ?>">
                            <input type="text" name="prenom" value="<?php echo $data->prenom ?>">
                            <input type="text" name="nom_entreprise" value="<?php echo $data->entreprise ?>">
                            <input type="text" name="adresse" value="<?php echo $data->adresse ?>">
                            <input type="text" name="mail" value="<?php echo $data->mail ?>">
                            <input type="text" name="tel" value="<?php echo $data->tel ?>">
                            <input type="text" name="siret" value="<?php echo $data->siret ?>">
                            <button type="submit" class="btn-form">modifier</button>
                        </form>
                    </div>

                    <div class="document card-options">
                        <h3 class="h3">documents</h3>

                        <div class="link">
                            <img src="./images/certificat.svg" alt="">
                            <a href="">certificat</a>
                        </div>
                        <div class="link">
                            <img src="./images/document.svg" alt="">
                            <a href="">document recapitulatif</a>
                        </div>
                        <div class="link">
                            <img src="./images/facture.svg" alt="">
                            <a href="">facture</a>
                        </div>
                        <div class="link">
                            <img src="./images/event.svg" alt="">
                            <a href="evenement">Event</a>
                        </div>

                    </div>

                </div>
                    
                <div class="section2">

                    <div class="rdv card-options">

                        <form action="espacepersoentreprise-newEvent" id="inscription" method="POST">

                            <input type="hidden" name="id" value="<?php echo $data->idOrga ?>" display="none">

                            <h3 class="h3">étape 1 : Choisissez votre formation</h3>
                            <div class="formation">
                                <input class="input" type="radio" name="type_formation" id="formation_1" value="formation 1">
                                <label class="label"for="formation_1">Formation 1</label>
                                <input class="input" type="radio" name="type_formation" id="formation_2" value="formation 2">
                                <label class="label" for="formation_2">Formation 2</label>
                                <input class="input" type="radio" name="type_formation" id="formation_3" value="formation 3">
                                <label class="label" for="formation_3">Formation 3</label>
                            </div>
    
                            <h3 class="h3">étape 2 : Quel est le nombre de participants ?</h3>
    
                            <div class="participant">

                                <div class="nombre">
                                    <button type="button" class="dec">-</button>
                                    <input type="text" id="qte" value="1" class="form-input" disabled>
                                    <button type="button" class="inc">+</button>
                                </div>

                                <div class="container-form-part">
                                    
                                    <div class="identity" data-index="1">
                                        <input class="form-input" type="text" id="nom-part" name="nom-part-1" placeholder="Nom ">
                                        <input class="form-input" type="text" id="prenom-part" name="prenom-part-1" placeholder="Prénom ">
                                        <input class="form-input" type="date" id="date_naissance" name="date_naissance-1" placeholder="jj/mm/AAAA">
                                    </div>

                                </div>
                                
                            </div>
    
                            <h3 class="h3">étape 3 : Choisissez votre date pour la formation </h3>
    
                            <div class="datepicker">
                                <input type="text" id="datepicker" class="form-input" name="datepicker">
                            </div>
                            

                            <h3 class="h3">étape 4 : Si vous avez des précisions à nous transmettre </h3>

                            <div class="form">
                                <textarea name="details" id="détails" cols="60" rows="10" placeholder="Votre messsage" class="form-input"></textarea>
                            </div>


                            <div class="submit">
                                <button type="submit" class="btn-form">Envoyer votre demande</button>
                            </div>
                        </form>

                        <?php if ($errorFormEntr): ?>
                            <div id="error_form_part" class="error">
                        
                                 <?php foreach ($errorFormEntr as $error) {
                                    if ($error != null) {
                                     echo '<p>'.$error.'</p><br>';
                                    }
                                } ?>
    
                        </div>

                        <?php endif; ?>

                        
                    </div>
                    
                    <div class="message card-options">
                        <h3 class="h3">Laissez nous un commentaire !</h3>
                        <form action="" class="form">
                            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Votre messsage" class="form-input"></textarea>

                            <div class="star-notation">
                                <i class="fas fa-star" data-star="1"></i>
                                <i class="fas fa-star" data-star="2"></i>
                                <i class="fas fa-star" data-star="3"></i>
                                <i class="fas fa-star" data-star="4"></i>
                                <i class="fas fa-star" data-star="5"></i>
                                <input type="text" name="note" id="note">
                            </div>
                            <button type="submit" class="btn-form">publier</button>
                        </form>
                    </div>
                    
                    <div class="api card-options">

                        <h3 class="h3">La playlist qui peut vous sauver la vie</h3>

                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/7oJx24EcRU7fIVoTdqKscK?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

                    </div>
                </div>
                </div>

            </div>
            
        </main>

        <script src="../public/js/formulaire.js"></script>
        <script src="../public/js/notation.js"></script>

         <!-- jquerry datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../public/js/jquery/jquery-ui.min.css">
    <script src="../public/js/jquery/jquery-ui.min.js"></script>
    <script src="../public/js/jquery/datepicker.js"></script>
    <script src='../public/js/jquery/datepicker-fr.js' type='text/javascript'></script>
    