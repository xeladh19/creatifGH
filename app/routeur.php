<?php
/*
./app/routeur.php
Le routeur charge le controleur et lance l'action qui correspond à ce qu'il se
passe dans l'url
*/

// ROUTES DES PROJETS
// DETAILS D'UN PROJET
// PATTERN: ?postID=x /projets/id/slug.html
// CTRL: postsControleur
// ACTION: show
    if (isset($_GET['projetID'])):
      include_once '../app/controleurs/projetsControleur.php';
      \App\Controleurs\ProjetsControleur\showAction($connexion, $_GET['projetID']);

elseif(isset($_GET['projets'])):
include_once '../app/controleurs/projetsControleur.php';
  \App\Controleurs\ProjetsControleur\indexAction($connexion);





// elseif:
//   include_once '../app/controleurs/creatifsControleur.php';
// \App\Controleurs\CreatifsControleur\indexAction($connexion);

    elseif(isset($_GET['projets'])):
      include_once '../app/routeurs/projetsRouteur.php';


      // ROUTE DE LA NEWSLETTER
      // PATTERN : /index.php?abonnes
      //Controleur: AbonnesControleur
      // ACTION: add
        elseif (isset($_GET['abonnes'])):
          include_once '../app/routeurs/AbonnesRouteur.php';

          elseif (isset($_GET['projetID'])):
                include_once '../app/controleurs/projetsControleur.php';
                \App\Controleurs\ProjetsControleur\showAction($connexion, $_GET['projetsID']);

elseif (isset($_GET['creatifID'])):
  include_once '../app/controleurs/creatifsControleur.php';
  \App\Controleurs\CreatifsControleur\showAction($connexion, $_GET['creatifID']);




      // ROUTE PAR DEFAUT
      // PATTERN: /
      // CTRL: postsControleur
      // ACTION: index
      else:
        include_once '../app/controleurs/creatifsControleur.php';
        \App\Controleurs\CreatifsControleur\indexAction($connexion);









//ROUTE PAR DEFAUT
//PATTERN: /
//CTRL: creatifsControleur
//ACTION: indexAction
// else:
//   include_once '../app/controleurs/creatifsControleur.php';
//
//     \App\Controleurs\CreatifsControleur\indexAction($connexion);
 endif;
