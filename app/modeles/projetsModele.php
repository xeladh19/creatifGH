<?php
/*
./app/modeles/projetsModele.php
Modele des projets
*/


namespace App\Modeles\ProjetsModele;
//
// function findAll(\PDO $connexion){
//   $sql = "SELECT *, p.id as projetsId,
//   t.id as tagId,
//   t.nom as tagNom,
//   p.dateCreation
//   FROM projets p
//   JOIN projets_has_tags pht on pht.projet = p.id
//   JOIN tags t on pht.tag = t.id
//   ORDER BY p.dateCreation DESC
//   LIMIT 10;";
//   $rs = $connexion->query($sql);
//   return $rs->fetchAll(\PDO::FETCH_ASSOC);
// }
//
// function findOneById(\PDO $connexion , int $id) :array {
//   $sql = "SELECT *, p.id as postId,
//   c.id as categorieId,
//   c.nom as categorieNom,
//   p.dateCreation
//   FROM projets p
//   JOIN categories c on p.category_id = c.id
//   WHERE p.id = :id;";
// 
//   $rs = $connexion->prepare($sql);
//   $rs->bindValue (':id', $id, \PDO::PARAM_INT);
//   $rs->execute();
//   return $rs->fetch(\PDO::FETCH_ASSOC);
// }
function findAll(\PDO $connexion) :array{
    $sql = "SELECT *
            FROM projets
            ORDER BY dateCreation DESC
            LIMIT 10;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }


  function findOneById(\PDO $connexion, int $id) {
   $sql = "SELECT *
           FROM projets
           WHERE id = :id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(\PDO::FETCH_ASSOC);
 }
