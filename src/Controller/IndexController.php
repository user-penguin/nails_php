<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;
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
     * @Route("/articleAdmin")
     */
    public function articleAdmin(LoggerInterface $logger) {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $products = $repository->findAll();
        $logger->info($products[0]->getAuthorId());

        return $this->render('articleAdmin.html.twig', ['articles' => $products]);
    }
}