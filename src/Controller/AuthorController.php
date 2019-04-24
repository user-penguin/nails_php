<?php


namespace App\Controller;


use App\Entity\Article;
use App\Entity\Author;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/author/{page<\d>}", name = "conrete_author")
     */
    public function concretAuthor($page) {
        return $this->render('author.html.twig');
    }

    /**
     * @Route("/author/delete_author/{id<\d>}", name = "author_delete")
     */
    public function deleteAuthor($id) {
        $entityManager = $this->getDoctrine()->getManager();

        $repositoryArticles = $this->getDoctrine()->getRepository(Article::class);

        $articles = $repositoryArticles->findAll();
        foreach ($articles as $concreteArticle) {
            if ($concreteArticle->getAuthor()->getId() == $id) {
                $entityManager->remove($concreteArticle);
            }
        }
        $repositoryAuthors = $this->getDoctrine()->getRepository(Author::class);
        $author = $repositoryAuthors->find($id);
        $entityManager->remove($author);
        $entityManager->flush();
        return $this->redirectToRoute("author_admin");
    }

    /**
     * @Route("/author/edit_author", name = "author_edit")
     */
    public function editAuthor() {
        $Name = $_POST["editName"];
        $SecName = $_POST["editSecName"];
        $Email = $_POST["editEmail"];
        $Phone = $_POST["editPhone"];
        $Price = $_POST["editPrice"];
        $Ranking = $_POST["editRanking"];
        $Mission = $_POST["editMission"];
        $MainText = $_POST["editMainText"];
        $id = $_POST["idAuthor"];

        $entityManager = $this->getDoctrine()->getManager();
        $author = $this->getDoctrine()->getRepository(Author::class)->find((int)$id);

        if (!$author) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $author->setName($Name);
        $author->setSecName($SecName);
        $author->setEmail($Email);
        $author->setPhone($Phone);
        $author->setRanking((int)$Ranking);
        $author->setPrice((int)$Price);
        $author->setMission($Mission);
        $author->setMainText($MainText);

        $entityManager->flush();
        return $this->redirectToRoute("author_admin");
    }


    /**
     * @Route("/author/add_new_author")
     */
    public function addNewAuthor(LoggerInterface $logger)
    {
        $Name = $_POST["name"];
        $SecName = $_POST["secName"];
        $Email = $_POST["email"];
        $Phone = $_POST["phone"];
        $Price = $_POST["price"];
        $Ranking = $_POST["ranking"];
        $Mission = $_POST["mission"];
        $MainText = $_POST["mainText"];
        $author = new Author();

        $entityManager = $this->getDoctrine()->getManager();

        $author->setName($Name);
        $author->setSecName($SecName);
        $author->setEmail($Email);
        $author->setPhone($Phone);
        $author->setRanking((int)$Ranking);
        $author->setPrice((int)$Price);
        $author->setMission($Mission);
        $author->setMainText($MainText);

        $entityManager->persist($author);
        $entityManager->flush();

        return $this->redirectToRoute("author_admin");
    }
}