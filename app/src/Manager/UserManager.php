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
        $query = 'SELECT * FROM User WHERE id=:id';
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':id' => $id]);
        $result = $stmnt->fetch(\PDO::FETCH_ASSOC);
        return new User($result);
    }
    public function findUserLogin($nickname)
    {   

        $query = "SELECT  * FROM `User` WHERE nickname=:nickname ";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':nickname' => $nickname,]);
        $result = $stmnt->fetch(\PDO::FETCH_ASSOC);
        return $result ;
    }

    public function getPassword($nickname)
    {
        $query = "SELECT `password` FROM `User` WHERE nickname=:nickname";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':nickname' => $nickname]);
        $result = $stmnt->fetch(\PDO::FETCH_ASSOC);
        return $result ;
    }
    
    public function createUser( $nickname, $password)
    {   
        $query = "INSERT into `User` (`nickname`, `password`, `rank`) VALUES ( :nickname, :password, :rank) ";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':nickname' => $nickname, ':password' => $password, ':rank' => 0, ]);
    }

    public function modifyUser($id, $nickname, $password, $rank)
    {
        $query = "UPDATE `User` SET `nickname` = :nickname, `password` = :password, `rank` = :rank WHERE id = :id";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':nickname' => $nickname, ':password' => $password, ':rank' => $rank, ':id' => $id]);
    }

    public function deleteUser(int $id) : bool
    {
        $query = "DELETE FROM User WHERE id = :id";
        $stmnt = $this->pdo->prepare($query);
        return $stmnt->execute([ ':id' => $id]);
    }
}