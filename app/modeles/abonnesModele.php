<?php
/*
./app/modeles/abonnesModele.php
Modèle des abonnés
S'occupe des transactions avec la base de donnée
SELECT,INSERT, UPDATE ET DELETE

*/

namespace App\Modeles\AbonnesModele;


function insert(\PDO $connexion, string $email) :int {
   $sql = "INSERT INTO abonnes
   SET mail        = :mail;";
   $rs = $connexion->prepare($sql);
   $rs->bindValue(':mail', $email, \PDO::PARAM_STR);
   $rs->execute();
   return $connexion->lastInsertId();
}
