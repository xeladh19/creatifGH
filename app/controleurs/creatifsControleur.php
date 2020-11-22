<?php

/*
./app/controleur/creatifsControleur.php
 Contrôleur des creatifs
 */


function showAction(PDO $connexion, int $id = 1){
  //Je demande le créatif au modèle
include_once '../app/modeles/creatifsModele.php'
$creatif = findOneById($id);



  //Je charge la vue show dans $content
  GLOBAL $content;
  ob_start();
  include '../app/vues/creatifs/show.php';
$content = ob_get_clean();
}
