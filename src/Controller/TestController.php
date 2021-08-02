<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController {
    /**
     * @Route("/test/my_controller")
     */

    public function sayHello(): Response {
        // return new Response(
        //     '<html><body>hello ! </body></html>'
        // );

        return $this->render('test/my_controller.html.twig', [
            'name' => 'Gin',
        ]);
    }
}