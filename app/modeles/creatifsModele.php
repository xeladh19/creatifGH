<?php
/*
./app/modeles/creatifsModele.php
Modèle des creatifs
S'occupe des transactions avec la base de donnée
*/

namespace App\Modeles\creatifsModele;
use PDO;
function findOneById(\PDO $connexion, int $id){
  $sql ="SELECT *
  FROM creatifs
  WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, PDO::PARAM_INT);
  $rs->execute();

  return $rs->fetch(PDO::FETCH_ASSOC);
}


function findAll(\PDO $connexion){
  $sql = "SELECT *
          FROM creatifs
          ORDER BY pseudo ASC;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);

}

function findAllByCreatifs(\PDO $connexion, int $id){
  $sql ="SELECT *
         FROM projets p
         JOIN creatifs c on c.id = p.creatif
         WHERE p.creatif = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, PDO::PARAM_INT);
  $rs->execute();

  return $rs->fetch(PDO::FETCH_ASSOC);
}
