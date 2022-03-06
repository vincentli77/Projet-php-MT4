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


        $this->render('Frontend/login', [], 'le titre de la page');

    }

    public function postLogin()
      {   

        $manager = new UserManager(PDOFactory::getInstance());
        if (isset($_POST['user']) && isset($_POST['pswd'])) {
            $manager->createUser($_POST['user'], $_POST['pswd'],);
            $this->render('Frontend/login', [] , 'Login');
        }
        $this->render('Frontend/login', [], 'le titre de la page');

    }

}