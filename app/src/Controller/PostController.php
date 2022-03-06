<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;

use App\Manager\UserManager;

class PostController extends BaseController
{
    /**
     * @Route(path="/", name="homePage")
     * @return void
     */
    public function getHome()
    {
        $manager = new UserManager(PDOFactory::getInstance());
        $user = $manager->findAllUsers();
        $manager = new PostManager(PDOFactory::getInstance());
        $post = $manager->findAllPosts();
        $articles = [];

        foreach ($post as $key => $article) {
            array_push($articles, new Post($article));
        }
        $this->render('Frontend/home', ['articles' => $articles,'user' => $user], 'le titre de la page');
    }


    public function getArticle(int $id)
    {
        $manager = new PostManager(PDOFactory::getInstance());
        $post = $manager->findPost($id);
        $this->render('Frontend/article', ['article' => $post], 'le titre de la page');
    }

    public function getCreateArticle()
    {
        $this->render('Frontend/createArticle', [] , 'Créer un article');
    }

    public function postCreateArticle()
    {
        $manager = new PostManager(PDOFactory::getInstance());
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $manager->createPost($_POST['title'], $_POST['content'], $_POST['authorId']);
            $this->render('Frontend/createArticle', [] , 'Créer un article');
        }
    }

    public function getDeleteArticle(int $id)
    {
        $manager = new PostManager(PDOFactory::getInstance());
        if($manager->deletePost($id)){
            header('Location: /');
            exit;
        }
        else {
            // throw new Exception("Error Processing Request", 1);
        }
    }

    public function getModifyArticle(int $id)
    {
        $manager = new PostManager(PDOFactory::getInstance());
        $post = $manager->findPost($id);
        $this->render('Frontend/modifyArticle', ['article' => $post] , 'Modifier un article');
       
    }

    
    public function postModifyArticle(int $id)
    {
        $manager = new PostManager(PDOFactory::getInstance());
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $manager->modifyPost($id, $_POST['title'], $_POST['content'], $_POST['authorId']);
            $this->render('Frontend/modifyArticle', [] , 'Modifier un article');
        }
    }




    /**
     * @Route(path="/show/{id}-{truc}", name="showOne")
     * @param int $id
     * @param string $truc
     * @return void
     */

}