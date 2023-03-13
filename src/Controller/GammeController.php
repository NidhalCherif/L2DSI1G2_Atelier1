<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function index(): Response
    {
        $tab=['imprimantes','accessoire','ordinateur','vidéoprojecteur'];
        return $this->render('gamme/lister.html.twig', [
            'gammes' => $tab,
        ]);
    }
}
