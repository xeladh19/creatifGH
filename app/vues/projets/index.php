
<?php
/*
  ./app/vues/posts/index.php
    Variables disponibles
    $posts= ARRAY(ARRAY(id, titre, texte, dateCreation, image, creatif))
 */

?>
<!-- Title -->
  <h1 class="mt-4">Les projets <small>Design capill'Hair</small></h1>

<hr>

<!-- LISTE DES POSTS -->
<?php foreach ($projets as $projet): ?>
<div class="row">
<div class="col-md-4">
  <a href="#">
    <img class="img-fluid rounded mb-3 mb-md-0" src="assets/images/<?php echo $projet['image']; ?>" alt="coiffure">
  </a>
</div>
<div class="col-md-8">
  <h3><?php echo $projet['titre']; ?></h3>
  <p class="lead">
    par
    <a href="artiste_details.html"><?php echo $projet['creatif']; ?></a> le <?php echo date('d-m-Y', strtotime($projet['dateCreation'])); ?>

  </p>
  <p><?php echo substr($projet['texte'], 0, 100); ?></p>
  <a class="btn btn-primary" href="projets/<?php echo $projet['id']; ?>/<?php echo \Noyau\Fonctions\slugify ($projet['titre']); ?>">View Project</a>
  <hr/>

<!-- Tags des projets -->

  <ul class="list-inline tags">



        <li><a href="#" class="btn btn-default btn-xs">Vintage</a></li>
        <li><a href="#" class="btn btn-default btn-xs">Football</a></li>
      </ul>


</div>


</div>
<hr>
<?php endforeach; ?>
