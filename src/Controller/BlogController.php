<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController {
    /**
     * @Route("/", name="blog_index")
     */
    public function index(): Response {

    }

    /**
     * @Route("/article/{slug}", name="blog_post")
     */
    public function show(string $slug): Response {
        
    }
}