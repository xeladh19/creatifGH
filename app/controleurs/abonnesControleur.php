<?php

/*
./app/controleurs/abonnesControleur.php
 Contrôleur des Abonnes
 */

function addAction(string $email){
  include_once  '../app/modeles/AbonnesModele.php';
  $sql = add($email);

GLOBAL $content, $title;
$title ="Ajout d'un abonne"
ob_start();
include '../app/vues/abonnes/add.php';
$content = ob_get_clean();
}
