<?php


namespace App\Controller;


use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class HomeController extends AbstractController
{
    /**
     * @return string
     * @Route("/", name="home")
     */
    public function index(UserPasswordEncoderInterface $encoder, EntityManagerInterface $em)
    {
        return $this->render('home.html.twig');
    }
}