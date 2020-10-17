<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig');
    }

    /**
     * @Route("/blog/{id}", name="blog_view")
     */
    public function view($id)
    {
        return $this->render('blog/view.html.twig');
    }
}
