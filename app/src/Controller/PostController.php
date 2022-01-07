<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;

class PostController extends BaseController
{
    /**
     * @Route(path="/", name="homePage")
     * @return void
     */
    public function getHome()
    {
        $manager = new PostManager(PDOFactory::getInstance());
        
        $post = $manager->findAllPosts();

        $articles = [];

        foreach ($post as $key => $article) {
            array_push($articles, new Post($article));
        }
        $this->render('Frontend/home', ['articles' => $articles], 'le titre de la page');
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
        var_dump($_POST);
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $manager->createPost($_POST['title'], $_POST['content'], $_POST['authorId']);
            $this->render('Frontend/createArticle', [] , 'Créer un article');
        }
    }

    public function getDeleteArticle(int $id)
    {
        $manager = new PostManager(PDOFactory::getInstance());
        
        //a completer next step 
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
        // var_dump($_POST);
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $manager->ModifyPost($id, $_POST['title'], $_POST['content'], $_POST['authorId']);
            $this->render('Frontend/modifyArticle', [] , 'Créer un article');
        }
    }




    /**
     * @Route(path="/show/{id}-{truc}", name="showOne")
     * @param int $id
     * @param string $truc
     * @return void
     */
    public function getShow(int $id, string $truc)
    {
        $this->renderJSON(['message' => $truc, 'parametre' => $id]);
    }

    /**
     * @Route(path="/show")
     * @return void
     */
    public function getShowTest()
    {
        echo 'je suis bien la bonne méthode';
    }
}