<?php

  /*
    ./app/vues/template/partials/_content.php
  */

?>

<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

 <?php echo $content; ?>

    </div>
    <div class="col-md-4">
          <?php include '../app/vues/template/partials/_sidebarWidget.php'; ?>  
          </div>


  </div>
  <!-- /.row -->

</div>
    <!-- /.container -->
