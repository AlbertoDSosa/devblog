<?php

namespace App\dao;

class AuthDao extends Dao
{
    public function save(string $email, string $password)
    {
        try {
        $sql = "INSERT INTO users (email, password) VALUES (? ,?)";
        $statement = $this->pdo->prepare($sql);
        $result =  $statement->execute([$email, $password]);
                
        } catch(Exception $err) {
            $this->logger->warning($err->getMesssage());
        }
    }
    
}