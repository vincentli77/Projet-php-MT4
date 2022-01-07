<?php

namespace App\Controller;

use App\Core\Factory\PDOFactory;
use App\Manager\UserManager;
use App\Entity\User;

class UserController extends BaseController
{
    /**
     * @Route(path="/dashboard", name="dashboard")
     * @return void
     */
    public function getUsers()
    {
        $manager = new UserManager(PDOFactory::getInstance());
        
        $dataUsers = $manager->findAllUsers();
        $users = [];
        foreach ($dataUsers as $key => $user) {
            array_push($users, new User($user));
        }

        $this->render('Frontend/user', ['users' => $users], 'le titre de la page');
    }

    public function getSingleUser(int $id)
    {
        $manager = new UserManager(PDOFactory::getInstance());
        $user = $manager->findPost($id);
        $this->render('Frontend/article', ['users' => $user], 'le titre de la page');
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