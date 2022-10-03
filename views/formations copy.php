
        <main>

            <div class="container-formations">
                <div class="type-client">
                    <h2 class="h2">à qui s'adressent nos formations ?</h2>
                    <div class="client">

                        <div class="img">
                            <?php foreach ($client_img as $img): ?>
                    
                            
                            <img src="./images/<?php echo $img->nom?>" alt="<?php echo $img->nom?>">

                            <?php endforeach; ?>
                            <!-- <img src="./images/ecole.jpg" alt="photo d'élèves en classe">
                            <img src="./images/particulier.jpg" alt="famille"> -->
                        </div>
                        
                        <div class="content">

                            <?php foreach ($details_client as $details): ?>

                            <div class="text-client">
                                <h3>Vous êtes une entreprise ?</h3>
                                <p><?php echo $details->contenu?></p>
                            </div>

                            <?php endforeach; ?>
                        
                            <!-- <div class="text-client">
                                <h3>Vous êtes une école ?</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas quae veniam sequi voluptate quis hic sapiente eum labore, corporis delectus nisi voluptatem ea, necessitatibus aspernatur, eligendi saepe veritatis reiciendis facere?
                                Asperiores totam sit itaque vel soluta molestias illo fugiat natus ullam voluptas error veniam, aliquid placeat magni eum minus doloribus laboriosam sequi omnis nihil? Sapiente odio laborum exercitationem distinctio ab!</p>
                            </div>
    
                            <div class="text-client">
                                <h3>Vous êtes un particulier ?</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas quae veniam sequi voluptate quis hic sapiente eum labore, corporis delectus nisi voluptatem ea, necessitatibus aspernatur, eligendi saepe veritatis reiciendis facere?
                                Asperiores totam sit itaque vel soluta molestias illo fugiat natus ullam voluptas error veniam, aliquid placeat magni eum minus doloribus laboriosam sequi omnis nihil? Sapiente odio laborum exercitationem distinctio ab!</p>
                            </div> -->
                        </div>

                </div>
            </div>

                <div class="formations">
                    <h2>nos formations</h2>

                <section class="timeline-section">
                    <div class="items">
                        <?php 
                        
                        $index=0;
                        
                        foreach ($resume as $resume): 
                        
                        if ($index%2 == 0) {
                            $position ="card-left";
                        }else{
                            $position ="card-right";
                        }

                        ?>
                        <div class="item">
                            <div class="dot"></div>

                                <div class="<?php echo $position?> card-formation">

                                <h3><?php echo $resume->titre?></h3>
                                <p><?php echo $resume->contenu?></p>
                                <div class="btn-lien-2">
                                    <a href="">Plus d'infos ?</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $index++;
                        endforeach; ?>
                        <!-- <div class="item">
                            <div class="dot"></div>
                            <div class="card-right card-formation">
                                <h3>formation 2</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas quae veniam sequi voluptate quis hic sapiente eum labore, corporis delectus nisi voluptatem ea, necessitatibus aspernatur, eligendi saepe veritatis reiciendis facere?
                                    Asperiores totam sit itaque vel soluta molestias illo fugiat natus ullam voluptas error veniam, aliquid placeat magni eum minus doloribus laboriosam sequi omnis nihil? Sapiente odio laborum exercitationem distinctio ab!</p>
                                <div class="btn-lien">
                                    <a href="">Plus d'info ?</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="dot"></div>
                            <div class="card-left card-formation">
                                <h3>formation 3</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas quae veniam sequi voluptate quis hic sapiente eum labore, corporis delectus nisi voluptatem ea, necessitatibus aspernatur, eligendi saepe veritatis reiciendis facere?
                                    Asperiores totam sit itaque vel soluta molestias illo fugiat natus ullam voluptas error veniam, aliquid placeat magni eum minus doloribus laboriosam sequi omnis nihil? Sapiente odio laborum exercitationem distinctio ab!</p>
                                <div class="btn-lien">
                                    <a href="">Plus d'info ?</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </section>
            </div>
