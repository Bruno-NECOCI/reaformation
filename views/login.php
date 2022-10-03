        <main>

            <div class="container-login">

                <h2 class="h2">bienvenue !</h2>

                <div class="login">

                    <div class="form_admin">
                        
                    <h3 class="h3">Organisateur</h3>
                            
                        <form action="login-organisateur" class="form" id="admin" method="POST">

                                <input type="text" name="login" placeholder="login" class="form-input">
                                <input type="password" name="mdp" placeholder="mot de passe" class="form-input">

                                <div class="remember" >
                                    <input type="checkbox" name="rememberorga">
                                    <p>Se souvenir de moi</p>
                                </div>

                                <button type="submit" class="btn-form">connexion</button>
                                <button id="create" class="btn-form">créer un compte</button>

                        </form>

                            <?php if ($errorFormOrga): ?>

                                <div class="error">
                                    <?php echo $errorFormOrga; ?>
                                </div>

                            <?php endif; ?>

                    </div>

                    <div class="form_participant">
                        <h3 class="h3">Participant</h3>
                        <form action="login-participant" class="form" id="participant" method="POST">
                            <input type="text" name="login" placeholder="login" class="form-input">
                            <input type="password" name="mdp" placeholder="mot de passe" class="form-input">
                            <input type="text" name="token" placeholder="session" class="form-input">
                            <div class="remember" name="rememberpart">
                                    <input type="checkbox" name="rememberpart">
                                    <p>Se souvenir de moi</p>
                            </div>
                            <button type="submit" class="btn-form">connexion</button>
                        </form>

                        <?php if ($errorFormPart): ?>

                        <div class="error">
                            <?php echo $errorFormPart; ?>
                        </div>

                        <?php endif; ?>

                    </div>
                </div>

            </div>

        </main>

        <script src="../public/js/inscription_redirection.js" defer></script>

