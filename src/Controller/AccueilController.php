<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController {
    
    #[Route('/' , name: 'accueil')]
    public function index(): Response{
        return new Response('Hello world !');
    }
    
}
