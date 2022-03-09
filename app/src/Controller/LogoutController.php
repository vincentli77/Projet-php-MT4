<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\PostManager;
use App\Entity\Post;
use App\Manager\UserManager;
use App\Controller\PostController;

class LogoutController extends BaseController

{
    public function getLogout()
    {    
        session_start();
        session_destroy();
        header('Location: /login');
        exit();
    }



}