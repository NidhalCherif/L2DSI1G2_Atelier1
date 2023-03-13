<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul', name: 'app_calcul')]
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'CalculController',
        ]);
    }
    #[Route('/calcul/som/{a<\d+>}/{b<\d+>}', name: 'app_somme')]
    public function somme($a,$b): Response
    {   $res=$a+$b;
        return $this->render('calcul/som.html.twig', [
            'a' =>$a,'b'=>$b,'res'=>$res
        ]);
    }
    #[Route('/calcul/sous/{a<\d+>}/{b<\d+>}', name: 'app_sous')]
    public function sous($a,$b): Response
    {   $res=$a-$b;
        return $this->render('calcul/sous.html.twig', [
            'a' =>$a,'b'=>$b,'res'=>$res
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function accueil(): Response
    {   $x=100;
        $y=2;
        return $this->render('calcul/accueil.html.twig',['x'=>$x,
                'y'=>$y]
        );
    }




}
