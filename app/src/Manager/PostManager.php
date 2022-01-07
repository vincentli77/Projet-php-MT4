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
        $query = 'SELECT * FROM Post';
        $stmnt = $this->pdo->query($query);

        $result = $stmnt->fetchAll(\PDO::FETCH_ASSOC)[$id];
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
}

// UPDATE `Post` SET `id`='[value-1]',`createdAt`='[value-2]',`title`='[value-3]',`content`='[value-4]',`authorId`='[value-5]' WHERE 1
// INSERT INTO `Post`(`id`, `createdAt`, `title`, `content`, `authorId`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')


// function enregistreValeur($iduu, $valeur) {
//     // permet d'enregistrer une donnée dans la table simpledonnee

//     global $bdd;
//     // permet de récupérer la variable $bdd, même si celle-ci est à l'extérieur de ma fonction
//     // dans cette variable, il y a le connexion à la base de données, nous pouvons donc
//     // l'utilise dans notre fonction.

//     // 1 - on verifie si la donnée existe déjà dans la table.

//     $nbVal = $bdd -> prepare("SELECT count(*) as nbEnregistrement from simpledonnee where iduu = :iduu");
//     $nbVal -> execute([":iduu" => $iduu]);
//     $resultNbVal =  $nbVal -> fetch(PDO::FETCH_ASSOC);


//     if($resultNbVal["nbEnregistrement"] == 0) {

//         // nous n'avons pas d'enregistrement, nous devons l'insérer dans la base.

//         $query = $bdd -> prepare("INSERT into simpledonnee(iduu, valeur) VALUES ( :iduu, :valeur )");
//         $query -> execute([":iduu" => $iduu, ":valeur" => $valeur]);


//     } else {
//         // l'enregistrement existe, nous devons le mettre à jour.
//         $query = $bdd -> prepare("UPDATE simpledonnee SET valeur=:valeur WHERE iduu = :iduu");
//         $query -> execute([":iduu" => $iduu, ":valeur" => $valeur]);
//     }

// }






