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
        session_start();
        $user_manager = new UserManager(PDOFactory::getInstance());
        $post_manager = new PostManager(PDOFactory::getInstance());
        $post = $post_manager->findAllPosts();
        $articles = [];
        foreach ($post as $key => $article) {
            array_push($articles, new Post($article));
        }
       if (isset($_SESSION['prenom'])   ) {
        $this->render('Frontend/home', ['articles' => $articles,'user' => $user_manager], 'le titre de la page');
        } else{
        header('Location: /login');
        }
        
    }


    // public function getArticle(int $id)
    // {
    //     $manager = new PostManager(PDOFactory::getInstance());
    //     $post = $manager->findPost($id);
    //     $this->render('Frontend/article', ['article' => $post], 'le titre de la page');
    // }

    public function getCreateArticle()
    {
        session_start();
        if (isset($_SESSION['prenom'])   ) {
        $this->render('Frontend/createArticle', [] , 'Créer un article');
        } else{
        header('Location: /login');
        }
        
    }

    public function postCreateArticle()
    {
        session_start();
        $manager = new PostManager(PDOFactory::getInstance());
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $manager->createPost($_POST['title'], $_POST['content'], $_SESSION['id']);
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
        session_start();
        $manager = new PostManager(PDOFactory::getInstance());
        $post = $manager->findPost($id);
        if (isset($_SESSION['prenom'])   ) {
        $this->render('Frontend/modifyArticle', ['article' => $post] , 'Modifier un article');
        } else{
        header('Location: /login');
        }
       
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