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
           <div class="row">
             <div class="col-md-4">
               <a href="#">
                 <img class="img-fluid rounded mb-3 mb-md-0" src="images/creatif_1.jpg" alt="">
               </a>
             </div>
             <div class="col-md-8">
               <h3 <?php echo $creatif['creatifId']; ?>/<?php echo \Noyau\Fonctions\slugify($creatif['titre']); ?>.html>Mister Univ'Hair</h3>
               <p><?php echo \Noyau\Fonctions\tronquer($creatif['texte'],100);  ?></p>
               <a class="btn btn-primary" href="projet_details.html">Voir détails</a>
               <hr/>
             </div>
           </div>
 <hr/>
           <!-- Project One -->
           <div class="row">
             <div class="col-md-4">
               <a href="#">
                 <img class="img-fluid rounded mb-3 mb-md-0" src="images/creatif_2.jpg" alt="">
               </a>
             </div>
             <div class="col-md-8">
               <h3>Leederdam'Hair</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
               <a class="btn btn-primary" href="projet_details.html">Voir détails</a>
               <hr/>
             </div>
           </div>


 <hr/>
         </div>
