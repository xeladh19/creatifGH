<?php
/*
  ./app/modeles/tagsModele.php
*/
  namespace App\Modeles\TagsModele;


  function findAllByPostId(\PDO $connexion, int $postId) :array{
    $sql = "SELECT *
            FROM tags t
            JOIN projets_has_tags pht ON t.id = pht.tag
            WHERE pht.projet = :postId
            ORDER BY t.nom ASC;";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':creatifId', $creatifId, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }


// Liste des tags dans l'index, à droite non lié à un projet
/*
  function findAll(\PDO $connexion) :array{
    $sql = "SELECT *
            FROM tags
            ORDER BY dateCreation DESC;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }
*/
