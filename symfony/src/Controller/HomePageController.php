<?php
// src/Controller/HomePageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    #[Route('/')]
    
    public function index(): Response
    {
        $number = random_int(0, 100);

        return $this->render('homepage.html.twig', [
            'number' => $number,
        ]);
    }
}