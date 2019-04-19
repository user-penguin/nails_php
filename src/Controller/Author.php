<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Author extends AbstractController
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
    * @Route("/author/{page<\d>}", name = "author_list")
    */
    public function author($page) {
        $this->logger->info($page);
        return $this->render('author.html.twig');
    }
}