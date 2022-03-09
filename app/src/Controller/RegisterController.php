<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\UserManager;

class RegisterController extends BaseController

{
    public function getRegister()
    {   

    session_start();
     if (isset($_SESSION['prenom'])   ) {
        header('Location: /');
        } else{
        $this->render('Frontend/register', [], 'le titre de la page');
        }
    }

    public function postRegister()
      {   

  

        $manager = new UserManager(PDOFactory::getInstance());
        if (isset($_POST['user']) && isset($_POST['pswd'])) {
            $manager->createUser($_POST['user'], $_POST['pswd'],);
            $this->render('Frontend/register', [] , 'Register');
        }
        $this->render('Frontend/register', [], 'le titre de la page');

    }

}