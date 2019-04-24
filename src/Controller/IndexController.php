<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;
use App\Entity\Author;
use Psr\Log\LoggerInterface;



class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/articleAdmin", name = "article_admin")
     */
    public function articleAdmin(LoggerInterface $logger) {
        $entityManager = $this->getDoctrine()->getManager();
        $repositoryArticles = $this->getDoctrine()->getRepository(Article::class);
        $repositoryAuthors = $this->getDoctrine()->getRepository(Author::class);
        $articles = $repositoryArticles->findAll();
        $authors = $repositoryAuthors->findAll();
        $logger->info($articles[0]->getAuthorId());

        return $this->render('articleAdmin.html.twig', ['articles' => $articles, 'authors' => $authors]);
    }

    /**
     * @Route("/authorAdmin", name = "author_admin")
     */
    public function authorAdmin(LoggerInterface $logger) {
        $entityManager = $this->getDoctrine()->getManager();
        $repositoryArticles = $this->getDoctrine()->getRepository(Article::class);
        $repositoryAuthors = $this->getDoctrine()->getRepository(Author::class);
        $authors = $repositoryAuthors->findAll();

        return $this->render('authorAdmin.html.twig', ['authors' => $authors]);
    }
}