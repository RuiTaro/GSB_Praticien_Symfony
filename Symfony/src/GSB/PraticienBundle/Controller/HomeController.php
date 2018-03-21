<?php

namespace GSB\PraticienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('GSBPraticienBundle:Home:home.html.twig');
    }

    public function ListePraticiensAction()
    {
    	$listePraticiens = 
    	$this->getDoctrine()
    	->getManager()
    	->getRepository('GSBPraticienBundle:praticien')
    	->findAll();
        return $this->render('GSBPraticienBundle:Praticiens:praticiens.html.twig', array('listePraticiens' => $listePraticiens ));
    }

<<<<<<< HEAD
    public function ListeSpecialitesAction()
    {
        $listeSpecialites = 
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:specialite')
        ->findAll();
        return $this->render('GSBPraticienBundle:Praticiens:praticiens.html.twig', array('listeSpecialites' => $listeSpecialites ));
=======
    public function ListeTypePraticiensAction()
    {
        $listeTypePraticiens =
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:type_praticien')
        ->findAll();
        return $this->render('GSBPraticienBundle:TypePraticiens:TypePraticiens.html.twig', array('listeTypePraticiens' => $listeTypePraticiens ));
>>>>>>> af0a15f834599be20467637193980fb2fbfe2f51
    }
}
