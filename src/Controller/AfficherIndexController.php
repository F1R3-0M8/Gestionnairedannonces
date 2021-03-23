<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficherIndexController extends AbstractController
{
    /**
     * @Route("/", name="afficher_index")
     */
    public function index(): Response
    {
        return $this->render('afficher_index/index.html.twig', [
            'controller_name' => 'AfficherIndexController',
        ]);
    }
}
