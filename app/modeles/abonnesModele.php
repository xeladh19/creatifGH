<?php
/*
./app/modeles/abonnesModele.php
Modèle des abonnés
S'occupe des transactions avec la base de donnée
SELECT,INSERT, UPDATE ET DELETE

*/

function add(string $email){
  //Ce tableau associatif est le résultat d'une requête SELECT

  $sql = "INSERT INTO Abonnes
          SET email = $email;";
  return $sql;
}
