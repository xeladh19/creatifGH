<?php
/*
./app/routeurs/creatifsRouteur.php
Routes des creatifs
*/
switch ($_GET['creatifs']):



  function showAction(\PDO $connexion, int $id) {
        // Je mets dans $categorie les infos de la catégorie que je demande au modèle
        include_once '../app/modeles/projectsModele.php';
        $projet = ProjectssModele\findOneById($connexion, $id);
        // Je mets dans $posts le nombre total de posts qu'une catégorie possède
        include_once '../app/modeles/projectsModele.php';
        $projets = \App\Modeles\ProjectsModele\findAllByProjetId($connexion, $id);
        // Je mets dans $tags le nombre total de tags qu'un post possède
        // include_once '../app/modeles/tagsModele.php';
        // $tags = \App\Modeles\TagsModele\findTagsOfPost($connexion);
        // Je charge la vue show dans $content
        GLOBAL $content, $title;
        $title = $projet['titre'];
        ob_start();
          include '../app/vues/projets/show.php';
        $content = ob_get_clean();
      }
