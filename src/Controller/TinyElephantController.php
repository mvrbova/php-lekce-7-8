<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TinyElephantController extends AbstractController
{
    /**
     * @Route("/tiny/elephant", name="tiny_elephant")
     */
    public function index()
    {
        return $this->render('tiny_elephant/index.html.twig', [
            'controller_name' => 'TinyElephantController',
        ]);
    }
}
