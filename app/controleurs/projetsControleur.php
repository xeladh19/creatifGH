<?php
/*
./app/controleurs/projetControleur.php
*/

// namespace App\Controleurs\ProjetsControleur;
// use App\Modeles\ProjetsModele;
//
// function indexAction(\PDO $connexion){
//
//   // Je mets dans $projects la liste des 10 derniers projects que je demande au modèle
//   include_once '../app/modeles/projetsModele.php';
// $projets = ProjetsModele\findAll($connexion);
//
// // Je charge directement la vue index dans $content
//
// GLOBAL $content, $title;
//
// ob_start();
// include '../app/vues/projets/index.php';
// $content = ob_get_clean();
// }
//
//
// function showAction (\PDO $connexion, int $id){
//   //Je mets dans mon $projets les informations du projet que je demande au modèle
//   include_once '../app/modeles/projetsModele.php';
//   $projets = ProjetsModele\findOneById($connexion, $id);
//
//   //Je charge la vue show dans $content
//   GLOBAL $content, $title;
//   $title = $post['title'];
//   ob_start();
//     include '../app/vues/projets/show.php';
//   $content = ob_get_clean();
// }
