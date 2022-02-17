<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministratifController extends AbstractController
{
    /**
     * @Route("/term_of_use", name="use_term")
     */
    public function index(): Response
    {
        return $this->render('administratif/index.html.twig', [
        ]);
    }
}
