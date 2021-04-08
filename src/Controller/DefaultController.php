<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index($name)
    {
        // return new Response('Hello! $name');
        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }

    /**
        * @Route("/simplicity")
        */
    // public function simple()
    // {
    //     return new Response('Simple! Easy! Great!');
    // }
}
