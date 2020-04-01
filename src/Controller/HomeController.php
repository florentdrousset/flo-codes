<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @return string
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig');
    }
}