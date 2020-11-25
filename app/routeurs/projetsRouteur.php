<?php
/*
./app/routeurs/projetsRouteur.php
Routes des projets
*/

use \App\Controleurs\ProjetsControleur;
  include_once '../app/controleurs/projetsControleur.php';

  switch ($_GET['projets']):

case 'delete':
  // SUPPRESSION D'UN PROJET
  // PATTERN: index.php?projets=delete&id=x
  // CTRL: projetsControleur
  // ACTION: delete
  ProjetsControleur\deleteAction($connexion, $_GET['id']);
  break;

default:
ProjetsControleur\indexAction($connexion);
break;
}
 
