<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;

class SessionController extends BaseController

{
    public function getSession(int $id)
    {   

        $manager = new UserManager(PDOFactory::getInstance());
        $user = $manager->findPost($id);

        echo 'dadzdzadzazadzd';

        $this->render('Frontend/home', [], 'le titre de la page');

    }

}