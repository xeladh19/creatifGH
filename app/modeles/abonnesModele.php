<?php
/*
./app/modeles/abonnesModele.php
Modèle des abonnés
S'occupe des transactions avec la base de donnée
SELECT,INSERT, UPDATE ET DELETE

*/

namespace App\Modeles\AbonnesModele;


function insert(\PDO $connexion,string $email){


  $sql = "INSERT INTO Abonnes
          SET mail = $email;";
  return $sql;
}
