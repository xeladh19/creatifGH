<?php

/*
  ./app/vues/creatifs/index.php
  Liste des creatifs
  Variables disponibles :
    - $creatifs ARRAY(ARRAY(id,pseudo,bio,image))
 */
 ?>



         <!-- Post Content Column -->
         <div class="col-lg-8">

           <!-- Page Heading -->

           <!-- Title -->
           <h1 class="mt-4">Les Créa'tifs <small>Design capill'Hair</small></h1>

           <hr>


            <!-- Project One -->
<?php foreach ($creatifs as $creatif): ?>
            <div class="row">

              <div class="col-md-4">

                <a href="#">



                  <img class="img-fluid rounded mb-3 mb-md-0" src="images/<?php echo $creatif['image']; ?>" alt="">
                </a>



              </div>



              <div class="col-md-8">


                <h3><?php echo \Noyau\Fonctions\slugify($creatif['pseudo']); ?></h3>





                <p><?php echo \Noyau\Fonctions\tronquer($creatif['bio'],100);  ?></p>




                <a class="btn btn-primary" href="creatifs/<?php echo $creatif['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($creatif['pseudo']); ?>">View Project</a>




<?php var_dump($creatif); ?>



                <hr/>
              </div>

            </div>
              <?php endforeach; ?>
            <hr/>

                    </div>
