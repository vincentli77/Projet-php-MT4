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

        $user_manager = new UserManager(PDOFactory::getInstance());
         if (isset($_POST['username']) && isset($_POST['password'])) {
            $hashPassword = $user_manager->getPassword($_POST['username']);
            if (password_verify($_POST['password'], $hashPassword['password'])) {
             $user = $user_manager->findUserLogin($_POST['username']);
                session_start();
                $_SESSION['prenom'] = $user['nickname'];
                $_SESSION['admin'] = $user['rank'];
                $_SESSION['id'] = $user['id'];
                header('Location: /');
                exit;
            } else {
                echo 'Invalid username or password.';
            }

         };
        }

    }




// }