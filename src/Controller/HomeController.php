<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'hola desde symfony'
        ]);
    }

    public function animal($nombre,$edad): Response
    {
        $text = "Controlador de animales";
        return $this->render(
            'home/animal.html.twig',
            [
                'text' => $text,
                'nombre' => $nombre,
                'edad' => $edad
            ]
        );
    }
}
