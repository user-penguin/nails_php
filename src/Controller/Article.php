<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article extends AbstractController
{
    /**
     * @Route("/article/{page<\d>}", name = "author_list")
     */
    public function concreteArticle($page) {
        return $this->render('article.html.twig');
    }

    /**
     * @Route("/article")
     */
    public function articles() {
        return $this->render('articles.html.twig');
    }


}