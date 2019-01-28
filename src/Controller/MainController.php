<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/competences", name="competences")
     */
    public function competences()
    {
        return $this->render('main/competences.html.twig');
    }

    /**
     * @Route("/contact",name="contact")
     */
    public function contact()
    {
        return $this->render('main/contact.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/cv", name="cv")
     */
    public function cv()
    {
        return $this->render('main/cv.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/projets", name="projets")
     */
    public function projets()
    {
        return $this->render('main/projets.html.twig');
    }
}
