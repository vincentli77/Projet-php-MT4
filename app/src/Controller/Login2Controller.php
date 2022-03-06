<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;
use App\Manager\UserManager;
use App\Controller\PostController;

class Login2Controller extends BaseController

{
    public function getLogin2()
    {   


        $this->render('Frontend/login2', [], 'le titre de la page');

    }

    public function postLogin2() 
      {   

        $manager = new UserManager(PDOFactory::getInstance());
         if (isset($_POST['username']) && isset($_POST['password'])) {
            $check = $manager->findUserLogin($_POST['username'],$_POST['password']);
            if($check ==false){
             $this->render('Frontend/login2', [] , 'Créer un article');

            }else{
                session_start();
                $_SESSION['prenom'] = $check['nickname'];
                $_SESSION['admin'] = $check['rank'];
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
        }

    }




}