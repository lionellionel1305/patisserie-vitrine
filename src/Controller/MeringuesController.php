<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MeringuesController extends AbstractController
{
    #[Route('/meringues', name: 'app_meringues')]
    public function index(): Response
    {
        return $this->render('meringues/index.html.twig', [
            'controller_name' => 'MeringuesController',
        ]);
    }
}
