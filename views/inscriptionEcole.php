
<main>
            <div class="container-inscription">
                
                <h2 class="h2">rejoignez-nous !</h2>

                    <div class="type_client">
                        
                        <label class="label " id="part"><a href="inscriptionPart">Particulier</a></label>
                        <label class="label" id="entreprise"><a href="inscriptionEntreprise">Entreprise</a></label>
                        <label class="label label-checked" id="ecole">Ecole</label>   

                    </div>
                    
                <div id="content_form">
    
                    <form action="inscriptionEcole-check" class="form" method="POST">
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
                        <input type="text" name="nom_ecole" id="nom_ecole" placeholder="Nom de l'établissement">
                        <div id="msgErrorNomEcole" class="msgError"></div>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse">
                        <div id="msgErrorAdresse" class="msgError"></div>
                        <input type="email" name="mail" id="mail" placeholder="Mail">
                        <div id="msgErrorMail" class="msgError"></div>
                        <input type="text" name="tel" id="tel" placeholder="Tel">
                        <div id="msgErrorTel" class="msgError"></div>
                        <input type="text" name="uai" id="uai" placeholder="UAI">
                        <div id="msgErrorUAI" class="msgError"></div>
                        <button type="submit" class="btn-form">S'inscrire</button>

                    </form>
                    

                    <?php if ($errorFormEcole): ?>

                    <div id="error_form_ecole" class="error">
                        <?php foreach ($errorFormEcole as $error) {
                            if ($error != null) {
                                echo '<p>'.$error.'</p><br>';
                            }
                        } ?>

                    </div>
                    <?php endif; ?>
                    
                </div>
            

            </div>
        
        </main>

        <script src="../public/js/formEcole.js" type="module"></script>
