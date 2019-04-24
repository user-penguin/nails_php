<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;



class ArticleController extends AbstractController
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

    /**
     * @Route("/article/add_new_article")
     */
    public function addNewArticles(Request $request, LoggerInterface $logger) {
        $Title = $_POST["Title"];
        $Text1 = $_POST["Text1"];
        $Text2 = $_POST["Text2"];
        $article = new Article();

        $entityManager = $this->getDoctrine()->getManager();

        $article->setTitle($Title);
        $article->setText1($Text1);
        $article->setTitle2($Text2);
        $article->setAuthorId(1);

        $entityManager->persist($article);
        $entityManager->flush();

        $logger->info($Title);
        return $this->redirect('localhost:10000/articleAdmin');
    }


}