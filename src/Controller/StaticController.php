<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response {
        return $this->render('index.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }

    /**
     * @Route("/tests", name="tests")
     */
    public function tests(): Response {
        return $this->render('tests.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
}
