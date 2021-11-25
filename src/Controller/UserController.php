<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     * @param $productRepository
     * @return Response
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('homepage/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/bestellen", name="bestellen")
     */
    public function bestellen()
    {
        return $this->render('bestellen/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function menu(CategoryRepository $categoryRepositoryRepository)
    {
        return $this->render('menu/index.html.twig', [
            'categories' => $categoryRepositoryRepository->findBy([
                'kindProduct' => 'Nigiri'
            ]),
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
