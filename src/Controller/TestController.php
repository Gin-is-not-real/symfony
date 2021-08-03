<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController {
    /**
     * @Route("/test/say_hello")
     */
    //reviens a la route "app_test_sayhello"
    public function sayHello(): Response {
        // renvoi à la page templates/test/say_hello
        return $this->render('test/say_hello.html.twig', [
            'name' => 'Gin',
        ]);
    }

    /**
     * @Route("/test/say_bonjour")
     */
    public function sayBonjour(): Response {
        // renvoi à la page templates/test/say_bonjour
        return $this->render('test/say_bonjour.html.twig', [
            'name' => 'Gin',
        ]);
    }

    /**
     * @Route("/test/layout")
     */
    public function layout(): Response {
        return $this->render('test/layout.html.twig', [
            'name' => 'Gin',
        ]);
    }

    /**
     * @Route("/test/my_first_page")
     */
    public function myFirstPage(): Response {
        return $this->render('test/my_first_page.html.twig', [
            'name' => 'Gin',
        ]);
    }

    /**
     * @Route("/with_slug/{slug}")
     */
    public function testSlug($slug): Response {
        return new Response(printf(
            'show %s', $slug
        ));
    }



}