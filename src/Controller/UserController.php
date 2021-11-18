<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/bestellingen", name="bestellingen")
     */
    public function bestellingen()
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
