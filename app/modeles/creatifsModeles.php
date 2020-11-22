<?php
/*
./app/modeles/creatifsModele.php
Modèle des creatifs
S'occupe des transactions avec la base de donnée
E

*/


function findOneById(\PDO $connexion, int $id){
  $sql ="SELECT *
  FROM creatifs
  WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id', $id, PDO::PARAM_INT);
  $rs->execute();

  return $rs->fetch(PDO::FETCH_ASSOC);
}
