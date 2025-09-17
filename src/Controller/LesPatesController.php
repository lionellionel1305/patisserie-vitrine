<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LesPatesController extends AbstractController
{
    #[Route('/les/types/de/pates', name: 'app_les_pates')]
    public function index(): Response
    {
        return $this->render('les_pates/index.html.twig', [
            'controller_name' => 'LesPatesController',
        ]);
    }
}
