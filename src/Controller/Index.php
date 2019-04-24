<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Articles;


class Index extends AbstractController
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
    public function articleAdmin() {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Articles::class);
        $products = $repository->findAll();

        return $this->render('articleAdmin.html.twig', ['articles' => $products]);
    }
}