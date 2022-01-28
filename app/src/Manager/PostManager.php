<?php

namespace App\Manager;

use App\Core\Factory\PDOFactory;
use App\Entity\Post;

class PostManager extends BaseManager
{
    public function findAllPosts()
    {
        $query = 'SELECT * FROM Post';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function findPost($id)
    {
        $query = 'SELECT * FROM Post WHERE id = :id';

        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':id' => $id]);

        $result = $stmnt->fetch(\PDO::FETCH_ASSOC);
        return new Post($result);
    }
    
    public function createPost($title,$content,$authorId)
    {
        $query = "INSERT into `Post`( `title`, `content`, `authorId`) VALUES ( :title, :content, :authorId)";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':title' => $title, ':content' => $content, ':authorId' => $authorId]);
    }

    public function modifyPost($id, $title,$content,$authorId)
    {
        $query = "UPDATE `Post` SET `title` = :title, `content` = :content, `authorId` = :authorId WHERE id=:id";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([ ':title' => $title, ':content' => $content, ':authorId' => $authorId, ':id' => $id]);
    }

    public function deletePost(int $id) : bool
    {
        $query = "DELETE FROM Post WHERE id = :id";
        $stmnt = $this->pdo->prepare($query);
        return $stmnt->execute([ ':id' => $id]);
    }

}






