<?php

namespace App\Manager;

use App\Core\Factory\PDOFactory;
use App\Entity\User;

class UserManager extends BaseManager
{
    public function findAllUsers()
    {
        $query = 'SELECT * FROM User';
        $stmnt = $this->pdo->query($query);
     
        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC);    
        return $result;
    }

    public function findUser($id)
    {
        $query = 'SELECT * FROM User';
        $stmnt = $this->pdo->query($query);
        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[$id];
        return new User($result);
    }
}