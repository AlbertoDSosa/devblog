<?php
namespace App\dao;

use Kint;
class RegisterDao extends Dao
{
  
  public function find(string $email)
  {
      try {
          $query = "SELECT * FROM users WHERE email=?";
          $statement = $this->pdo->prepare($query);
          $statement->execute([$email]);
          return $result = $statement->fetchAll(\PDO::FETCH_OBJ);
      } catch(Exception $err) {
          $this->logger->warning($err->getMesssage());
      }
  }

  

}