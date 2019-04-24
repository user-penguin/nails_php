<?php


namespace App\Controller;


use App\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;
use Symfony\Component\HttpFoundation\RedirectResponse;



class ArticleController extends AbstractController
{
    /**
     * @Route("/article/{page<\d>}", name = "concrete_article")
     */
    public function concreteArticle($page) {
        return $this->render('article.html.twig');
    }

    /**
     * @Route("/article/delete_article/{id<\d>}", name = "article_delete")
     */
    public function deleteArticle($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $repositoryArticles = $this->getDoctrine()->getRepository(Article::class);
        $article = $repositoryArticles->find($id);
        $entityManager->remove($article);
        $entityManager->flush();
        return $this->redirectToRoute("article_admin");
    }

    /**
     * @Route("/article/edit_article", name = "article_edit")
     */
    public function editArticle() {
        $articleId = $_POST["idArticle"];
        $Title = $_POST["editTitle"];
        $Text1 = $_POST["editText1"];
        $Text2 = $_POST["editText2"];

        $entityManager = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository(Article::class)->find((int)$articleId);

        if (!$article) {
            throw $this->createNotFoundException(
                'No product found for id '.$articleId
            );
        }

        $article->setTitle($Title);
        $article->setText1($Text1);
        $article->setTitle2($Text2);

        $entityManager->flush();
        return $this->redirectToRoute("article_admin");
    }


    /**
     * @Route("/article/add_new_article")
     */
    public function addNewArticles(LoggerInterface $logger) {
        $Title = $_POST["Title"];
        $Text1 = $_POST["Text1"];
        $Text2 = $_POST["Text2"];
        $authorId = $_POST["author"];
        $article = new Article();


        $entityManager = $this->getDoctrine()->getManager();

        $authorRepository = $this->getDoctrine()->getRepository(Author::class);
        $author = $authorRepository->find((int)$authorId);


        $article->setAuthor($author);
        $article->setTitle($Title);
        $article->setText1($Text1);
        $article->setTitle2($Text2);
        $article->setAuthorId(1);

        $entityManager->persist($article);
        $entityManager->flush();

        $logger->info($Title);
        return $this->redirectToRoute("article_admin");
    }


}