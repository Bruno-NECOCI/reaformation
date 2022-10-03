<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../public/js/login_direction.js" defer></script>
    <!-- <script src="../public/js/api.js" defer></script> -->
    <script src="../public/js/validatorform.js" defer></script>

    <title>Heart Formation</title>
</head>
<body>
    <div class ="main-container">

            <!-- --------------------Start Header-------------------- -->
            
            <header>

                <div class="navbar">
                    <div class="navbar__logo">
                        <p>RéaFormation</p>
                    </div>
                    <div class="navbar__logo_resp">
                        <p>RF</p>
                    </div>
    
                    <nav class="navbar__main">
                        
                            <label for="open"><i class="fa-solid fa-bars"></i></label>
                            <input type="checkbox" class="burger" id="open">
    
                        <ul class="navbar__menu">
                            <li><a href="index">accueil</a></li>
                            <li><a href="formations">nos formations</a></li>
                            <li><a href="apropos">à propos</a></li>
                            <li><a href="contact">contact</a></li>
                        </ul>
                    </nav>
                    <div class="navbar__login">
                        <?php if(!isset ($_SESSION['connected'])){ ?>
                        <button id="login" class="btn-lien" href="login">Login</button>
                        <?php }else{ ?>
                            <div class="login-logout">
                                <a href="<?php  echo $_SESSION['view'] ?>" class="espace-perso">espace perso</a>
                                <a href="deconnexion" class="logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                            </div>
                            
                        <?php }?> 
                        
                    </div>
    
                </div>
                
            </header>

        <!-- --------------------End Header-------------------- -->

        <?php echo $contenu ?>

        <!-- --------------------Start Footer-------------------- -->

        <footer>

            <div class="footer">
    
                <div class="footer__ml">
                    <a href="mentionsLegales">Mentions légales</a>
                </div>
    
                <div class="footer__copyright">
                    Copyright &copy;
                </div>
    
                <div class="footer__reseaux">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

        </footer>

        <!-- --------------------End Footer-------------------- -->

        
    </div>
</body>
</html>