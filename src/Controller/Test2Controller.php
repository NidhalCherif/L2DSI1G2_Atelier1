<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test2Controller extends AbstractController
{
    #[Route('/test2/{age}', name: 'app_test2')]
    public function index($age)
    {
        dd("votre age est $age");

        #return $this->render('test2/index.html.twig');
    }
}
