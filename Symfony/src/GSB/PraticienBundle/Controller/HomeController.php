<?php

namespace GSB\PraticienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('GSBPraticienBundle:Home:home.html.twig');
    }
}
