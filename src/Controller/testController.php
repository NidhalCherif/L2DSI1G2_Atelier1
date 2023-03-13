<?php

namespace App\Controller;
use App\taxes\calculateur;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{
    #[Route('/hello')]

    function show()
    {
        return $this->render("test\show.html.twig");
    }
    #[Route('/test')]

    function test1()
    {
        return new Response("<H1>Bonjour tout le monde</H1>");
    }
}
