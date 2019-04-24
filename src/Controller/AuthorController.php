<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/author/{page<\d>}", name = "author_list")
     */
    public function concreteAuthor($page) {
        $this->logger->info($page);
        return $this->render('author.html.twig');
    }

    /**
    * @Route("/authors")
    */
    public function allAuthors($page) {
        $this->logger->info($page);
        return $this->render('authors.html.twig');
    }
}