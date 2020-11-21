<?php
/*
./app/routeurs/tagsRouteur.php
Routes des tags
*/

use \App\Controleurs\TagsControleur;
  include_once '../app/controleurs/tagsControleur.php';

  switch ($_GET['tags']):

  case 'editForm':

  //EDITION D'UN TAG: FORM
  //PATTERN: index.php?tags=editForm
  //CTRL: tagsControleur
  //ACTION: editForm
  TagsControleur\editFormAction($connexion, $_GET['id']);
  break;
