<?php
/*
./app/routeurs/abonnesRouteur.php
Routes des abonnes
*/

use \App\Controleurs\AbonnesControleur;
  include_once '../app/controleurs/abonnesControleur.php';

  switch ($_GET['abonnes']):

case 'add':
  // AJOUT D'UN ABONNE
  // PATTERN: index.php?abonnes=add
  // CTRL: abonnesControleur
  // ACTION: add
  AbonnesControleur\addAction($connexion, $_POST['email']);
  break;

  case 'confirm':
 // DETAIL D'UN POST
 // Pattern: index?posts=confirm
 //CTRL: abonnesControleur
 //ACTION : confirm

 AbonnesControleur\confirmAction();
 break;
endswitch;
