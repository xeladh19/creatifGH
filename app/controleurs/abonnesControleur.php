<?php

/*
./app/controleurs/abonnesControleur.php
 Contrôleur des Abonnes
 */

 namespace App\Controleurs\AbonnesControleur;
     use App\Modeles\AbonnesModele;


//
// function addAction(string $email){
//   include_once  '../app/modeles/AbonnesModele.php';
//   $sql = add($email);
//
// GLOBAL $content, $title;
// $title ="Ajout d'un abonne"
// ob_start();
// include '../app/vues/abonnes/add.php';
// $content = ob_get_clean();
// }


function addAction(\PDO $connexion) {
   // Je demande au modèle d'ajouter un abonne
   include_once '../app/modeles/abonnesModele.php';
   $id = \App\Modeles\AbonnesModele\insert($connexion, $_POST['email']);
   // Je redirige vers la liste des posts
   header('location: ' . BASE_URL . 'confirmation');
}



function confirmAction(){

  //Je charge la vue show dans $content
  GLOBAL $content, $title;
  $title = 'Newsletter';
  ob_start();
    include '../app/vues/abonnes/confirm.php';
  $content = ob_get_clean();
}
