<?php
/*
./app/modeles/projetsModele.php
Modele des projets
*/


namespace App\Modeles\ProjetsModele;
/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
function findAll(\PDO $connexion) :array{
    $sql = "SELECT *
            FROM projets
            ORDER BY dateCreation DESC
            LIMIT 10;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
  }

/**
 * [findOneById description]
 * @param  PDO    $connexion [description]
 * @param  int    $id        [description]
 * @return [type]            [description]
 */
  function findOneById(\PDO $connexion, int $id) {
   $sql = "SELECT *
           FROM projets
           WHERE id = :id;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $id, \PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(\PDO::FETCH_ASSOC);
 }



 function findAllByCreatifs(\PDO $connexion, int $id) :array{
     $sql = "SELECT *
             FROM projets
             WHERE id = $id
             ORDER BY dateCreation DESC
             LIMIT 10;";
     $rs = $connexion->query($sql);
     return $rs->fetchAll(\PDO::FETCH_ASSOC);
   }
