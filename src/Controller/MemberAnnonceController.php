<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/member/annonce")
 */
class MemberAnnonceController extends AbstractController
{
    /**
     * @Route("/", name="member_annonce_index")
     */
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('member/annonce/index.html.twig', [
            'mainNavMember'=>true,
            'title'=>'Espace Membre',
            'annonces' => $annonceRepository->findAll()
        ]);
    }

    /**
     * @Route("/{id}", name="member_annonce_show", methods={"GET"})
     */
    public function show(Annonce $annonce): Response
    {
        return $this->render('member/annonce/show.html.twig', [
            'annonce' => $annonce,
        ]);
    }
}

