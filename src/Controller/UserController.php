<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
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
        return $this->render('bestellingen/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu()
    {
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/vestigingen", name="vestigingen")
     */
    public function vestigingen()
    {
        return $this->render('vestigingen/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
