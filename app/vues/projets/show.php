<?php
/*
  ./app/vues/posts/index.php
    Variables disponibles
    $post = ARRAY(id, titre, texte, dateCreation, image, creatif)
 */

?>
<!-- Title -->

<p class="lead">
  par
  <a href="artiste_details.html"><?php echo $projet['creatif']; ?></a> le 01-01-2017
</p>

<hr>

<!-- NOM DU PROJET -->

<div class="row">
  <div class="col-md-6">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="images/<?php echo $projet['image']; ?>" alt="">
    </a>
  </div>
  <div class="col-md-6">
    <p class="lead"><?php echo $projet['texte']; ?></p>
    <hr/>
    <p><?php echo $projet['texte']; ?></p>
    <hr/>

<!-- Les TAGS du projet -->

  <ul class="list-inline tags">



        <li><a href="#" class="btn btn-default btn-xs">Vintage</a></li>
        <li><a href="#" class="btn btn-default btn-xs">Football</a></li>
      </ul>

  </div>

</div>
<hr>
