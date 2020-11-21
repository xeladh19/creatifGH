<!-- Project One -->
<div class="row">
  <?php foreach ($projets as $projet): ?>


  <div class="col-md-4">
    <a href="projets/<?php echo $projet['projetId'];?>/<?php echo \Noyau\Fonctions\slugify($projet['title']); ?>.html"><h1><?php echo $projet['title']; ?></h1>
      <img class="img-fluid rounded mb-3 mb-md-0" src="images/1.jpg" alt="">
    </a>
  </div>


  <div class="col-md-8">

    <h3>Project One</h3>

    <p class="lead">
      par
      <a href="artiste_details.html">Mister Univ'Hair</a> le 01-01-2017
    </p>

    <p><?php echo \Noyau\Fonctions\tronquer($projet['text'], 110); ?></p>

    <a class="btn btn-primary" href="posts/<?php echo $projet['projetId']; ?>/<?php echo \Noyau\Fonctions\slugify($projet['title']); ?>.html">View Project</a>

    <hr/>



    <ul class="list-inline tags">
      <li><a href="#" class="btn btn-default btn-xs">Vintage</a></li>
      <li><a href="#" class="btn btn-default btn-xs">Football</a></li>
    </ul>

<?php endforeach; ?>

  </div>
</div>
<!-- /.row -->

<hr>
