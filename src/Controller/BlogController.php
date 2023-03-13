<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog/detail/{id}/{name?vide}', name: 'blog_detail' )]
    public function detail($id,$name): Response
    {
        return $this->render('blog/detail.html.twig', [
            'id' => $id,'name'=>$name
        ]);
    }
    #[Route('/blog/detail/{id}', name: 'blog_detail1',priority:1)]
    public function show($id): Response
    { $name='Symfony';
        return $this->render('blog/detail.html.twig', [
            'id' => $id,'name'=>$name
        ]);
    }

    #[Route('/blog/test', name: 'blog_test')]
    public function test(): Response
    { #$url=$this->generateUrl('blog_detail1',['id'=>100]);
        #dd($url);
        #return $this->redirect($url);
        return $this->redirectToRoute('blog_detail1',['id'=>100]);
    }

}
