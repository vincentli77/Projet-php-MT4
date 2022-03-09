<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;
use App\Manager\UserManager;

class LoginController extends BaseController

{
    public function getLogin()
    {   


        $this->render('Frontend/login', [], 'Login');

    }

    public function postLogin() 
      {   

        $manager = new UserManager(PDOFactory::getInstance());
         if (isset($_POST['username']) && isset($_POST['password'])) {
            $hashPassword = $manager->getPassword($_POST['username']);
            if (password_verify($_POST['password'], $hashPassword['password'])) {
             $user = $manager->findUserLogin($_POST['username']);
                session_start();
                $_SESSION['prenom'] = $user['nickname'];
                $_SESSION['admin'] = $user['rank'];
                $_SESSION['id'] = $user['id'];
                $manager = new UserManager(PDOFactory::getInstance());
                $user = $manager->findAllUsers();
                $manager = new PostManager(PDOFactory::getInstance());
                $post = $manager->findAllPosts();
                $articles = [];
                foreach ($post as $key => $article) {
                    array_push($articles, new Post($article));
                }
                header('Location: /');
                exit;
            } else {
                echo 'Invalid username or password.';
            }

         };
            // $check = $manager->findUserLogin($_POST['username'],$_POST['password']);
            // if($check ==false){
            //  $this->render('Frontend/login', [] , 'Login');

            // }else{
            //     session_start();
            //     $_SESSION['prenom'] = $check['nickname'];
            //     $_SESSION['admin'] = $check['rank'];
            //     $_SESSION['id'] = $check['id'];
            //     $manager = new UserManager(PDOFactory::getInstance());
            //     $user = $manager->findAllUsers();
            //     $manager = new PostManager(PDOFactory::getInstance());
            //     $post = $manager->findAllPosts();
            //     $articles = [];
            //     foreach ($post as $key => $article) {
            //         array_push($articles, new Post($article));
            //     }
            //     header('Location: /');
            //     exit;
            // //   $this->render('Frontend/home', ['articles' => $articles,'user' => $user], 'le titre de la page');
            // }
        }

    }




// }