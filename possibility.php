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
