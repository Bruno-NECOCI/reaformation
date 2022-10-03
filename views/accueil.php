        <main>

            <div class="container-accueil">

                <div id="presentation">
                    
                    <div id="titre">
                        <h2>Devenez les</h2>
                        <h2>secouristes de</h2>
                        <h2>demain !</h2>
                    </div>
    
                        <p>
                            <?php echo $accueil_speach; ?>
                        </p>
                        <div id="more">
                            <button>Plus d'infos</button>
                        </div>
                
                        <img src="../../back-office/public/img/<?php echo $accueil_img->nom; ?>" alt="<?php echo $accueil_img->alt; ?>">
                
                </div>
    
                <div id="reason">
                    <h2>Pourquoi se former ?</h2>
                    
                    <p><?php echo $accueil_exp ?></p>

                </div>

                <div id="detail">
                    <h2>En quelques chiffres</h2>
    
                    <div class="all_card">
                    
                    <?php foreach ($accueil_flipCard as $fliprCard): ?>
                    
                        <div class="card">
                            
                            <div class="card-inner">
                                <div class="card-front card-setup">
                                    <p><?php echo $fliprCard->chiffre ?></p>
                                </div>
                                <div class="card-back card-setup">
                                    <p>
                                    <?php echo $fliprCard->contenu ?>
                                    </p>
                                </div>
                            </div>
                            
                    </div>

                    <?php endforeach; ?>
                        
                    </div>
                </div>
    
                <div id="allCom">
                        <h2>Vos retours !</h2>
                        
                        <button class="prev-next" id="prev"><i class="fas fa-arrow-left"></i></button>
                        
                        <div class="container">

                            <div class="slide">
                                <div class="comClient">
            
                                    <h4 class="nomClient">Yes</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                                <div class="comClient">
            
                                    <h4 class="nomClient">Michel</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                                <div class="comClient">
            
                                    <h4 class="nomClient">Titi</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                                <div class="comClient">
            
                                    <h4 class="nomClient">Tata</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                                <div class="comClient">
            
                                    <h4 class="nomClient">Tutut</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                                <div class="comClient">
            
                                    <h4 class="nomClient">test</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                                <div class="comClient">
            
                                    <h4 class="nomClient">Momo</h4>
                                    <h4 class="activite">Profession</h4>
                                    <div class="date">23/08/2020</div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora atque ma</p>
                                    <div class="notation">
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star star-actived"><i class="fas fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                        <div class="star"><i class="far fa-star"></i></div>
                                    </div>
                    
                                </div>
                            </div>

                        </div>
                        
                            <button class="prev-next" id="next"><i class="fas fa-arrow-right"></i></button>
                      
                        
                </div>
            
            </div>

        </main>
        <script src="../public/js/caroussel.js" defer></script>
        <script src="../public/js/flip-card.js" defer></script>


    