<?php

namespace App\Controller;

use App\Repository\ProgrammingLanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/test/detail", name="detail")
     */
    public function detail()
    {
        return $this->render('test/detail.html.twig', [
            'username' => 'andrejmaly',
            'password' => 'velicesložitéheslo',
            'name' => 'Andrej Malý',
            'age' => 20,
        ]);
    }

    /**
     * @Route("/test/{name}", name="hello")
     */
    public function hello($name)
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => $name,
        ]);
    }

    /**
     * @Route("/test/list", name="list")
     */
    public function list(ProgrammingLanguageRepository $repository)
    {
        return $this->render('test/list.html.twig', [
            'languages' => $languageRepository ->findAll(),
        ]);
    }

    /**
     * @Route("/test/known", name="known")
     */
    public function known(ProgrammingLanguageRepository $repository)
    {
        return $this->render('test/known.html.twig', [
            'languages' => $repository ->findKnown(),
        ]);
    }
}
