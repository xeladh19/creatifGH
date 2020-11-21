<?php
/*
./app/routeur.php
Le routeur charge le controleur et lance l'action qui correspond à ce qu'il se
passe dans l'url
*/


// ROUTE DE LA NEWSLETTER
// PATTERN : /index.php?abonnes
//Controleur: AbonnesControleur
// ACTION: add
  if (isset($_GET['abonnes'])):
    include_once '../app/routeurs/AbonnesRouteur.php';
    



// ROUTE DES PROJETS
// PATTERN: index?projets=x
// ROUTEUR: projetsRouteur
elseif (isset($_GET['projets'])):
   include_once '../app/routeurs/projetsRouteur.php';




// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: projetsControleur
// ACTION: index
// else:
//    include_once '../app/controleurs/projetsControleur.php';
//    \App\Controleurs\ProjetsControleur\indexAction($connexion);
 endif;
