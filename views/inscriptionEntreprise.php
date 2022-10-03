        <main>

            <div class="container-inscription">
                
                <h2 class="h2">rejoignez-nous !</h2>

                    <div class="type_client">
                        <label class="label " id="part"><a href="inscriptionPart">Particulier</a></label>
                        <label class="label label-checked" id="entreprise">Entreprise</label>
                        <label class="label" id="ecole"><a href="inscriptionEcole">Ecole</a></label>
                                      
                    </div>

                <div id="content_form">
                        
                    <form action="inscriptionEntreprise-check" class="form" method="POST">
                        <input type="text" name="nom" id="nom" placeholder="Nom">
                        <div id="msgErrorNom" class="msgError"></div>
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
                        <div id="msgErrorPrenom" class="msgError"></div>
                        <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant">
                        <div id="msgErrorIdentifiant" class="msgError"></div>
                        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
                        <div id="msgErrorMdp" class="msgError"></div>
                        <input type="password" name="mdpConfirm" id="mdpConfirm" placeholder="Confirmation du mot de passe" >
                        <div id="msgErrorMdpConfirm" class="msgError"></div>
                        <input type="text" name="nom_entreprise" id="nom_entreprise" placeholder="Nom de l'entreprise">
                        <div id="msgErrorNomEntr" class="msgError"></div>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse">
                        <div id="msgErrorAdresse" class="msgError"></div>
                        <input type="email" name="mail" id="mail" placeholder="Mail">
                        <div id="msgErrorMail" class="msgError"></div>
                        <input type="text" name="tel" id="tel" placeholder="Tel">
                        <div id="msgErrorTel" class="msgError"></div>
                        <input type="text" name="siret" id="siret" placeholder="Siret">
                        <div id="msgErrorSiret" class="msgError"></div>
                        <button type="submit" class="btn-form">S'inscrire</button>
                    </form>

                    <?php if ($errorFormEntr): ?>

                    <div id="error_form_entreprise" class="error">
                        <?php foreach ($errorFormEntr as $error) {
                            if ($error != null) {
                                echo '<p>'.$error.'</p><br>';
                            }
                        } ?>

                    </div>

                    <?php endif; ?>

                    
                </div>
            

            </div>
        
        </main>

        <script src="../public/js/formEntreprise.js" type="module"></script>
