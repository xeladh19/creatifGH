<?php

/*
./app/controleur/creatifsControleur.php
 Contrôleur des creatifs
 */
//  namespace App\Controleurs\CreatifsControleur;
//  use App\Modeles\CreatifsModele;
//
// function indexAction(\PDO $connexion){
//   //Je demande les creatifs au modele
//   include_once '../app/modeles/creatifsModele.php';
//   $creatif = CreatifsModele\findAll($connexion);
//
//   //Je charge la vue index dans $content
//
//   GLOBAL $content,$title;
//   ob_start();
//   include '../app/vues/creatifs/index.php';
//   $content = ob_get_clean();
//   }


  // function showAction (\PDO $connexion, int $id){
  //   //Je mets dans mon $projets les informations du projet que je demande au modèle
  //   include_once '../app/modeles/creatifsModele.php';
  //   $creatif = CreatifsModele\findOneById($connexion, $id);
  //
  //   //Je charge la vue show dans $content
  //   GLOBAL $content, $title;
  //   $title = $creatif['titre'];
  //   ob_start();
  //     include '../app/vues/projets/index.php';
  //   $content = ob_get_clean();
  // }










// function showAction(PDO $connexion, int $id = 1){
//   //Je demande le créatif au modèle
// include_once '../app/modeles/creatifsModele.php'
// $creatif = findOneById();
//
//
//
//   //Je charge la vue show dans $content
//   GLOBAL $content;
//   ob_start();
//   include '../app/vues/creatifs/show.php';
// $content = ob_get_clean();
// }
