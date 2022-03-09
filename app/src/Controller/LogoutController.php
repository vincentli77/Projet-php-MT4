<?php

namespace App\Controller;
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