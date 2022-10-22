<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/signup', name: 'app_user_signup')]
    public function index(): Response
    {
        return $this->render('user/signup.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/list', name: 'app_user_list')]
    public function list(): Response
    {
        
        return $this->render('user/list.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

}
