<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", methods={"GET"})
     */
    public function about()
    {
        return $this->render('static/about.html.twig');
    }
}
