<?php

namespace GSB\PraticienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\PraticienBundle\Entity\praticien;
use GSB\PraticienBundle\Form\praticienType;
use GSB\PraticienBundle\Entity\type_praticien;
use GSB\PraticienBundle\Form\type_praticienType;
use GSB\PraticienBundle\Entity\specialite;
use GSB\PraticienBundle\Form\specialiteType;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('GSBPraticienBundle:Home:home.html.twig');
    }

                        //***AjoutPraticiens****
    public function FormAjoutPraticiensAction(Request $request)
    {
        $Praticiens = new praticien();
        $form = $this->createForm(praticienType::class, $Praticiens);
        if ($request->isMethod('POST')&& $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()
            ->getManager();
            $em->persist($Praticiens);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info','Le praticien a bien été enregistré');
            return $this->redirectToRoute('gsb_praticien_listeAjoutPraticiens');            
        }
        return $this->render('GSBPraticienBundle:FormAjoutPraticiens:FormAjoutPraticiens.html.twig', array('form' => $form->createView()));
    }

                    //***AjoutTypePraticiens****
    public function FormAjoutTypePraticiensAction(Request $request)
    {
        $TypePraticiens = new type_praticien();
        $form = $this->createForm(type_praticienType::class, $TypePraticiens);
        if ($request->isMethod('POST')&& $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()
            ->getManager();
            $em->persist($TypePraticiens);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info','Le type praticien a bien été enregistré');
            return $this->redirectToRoute('gsb_praticien_listeTypePraticiens');            
        }
        return $this->render('GSBPraticienBundle:FormAjoutTypePraticiens:FormAjoutTypePraticiens.html.twig', array('form' => $form->createView()));
    }

                    //***AjoutSpecialites****
    public function FormAjoutSpecialitesAction(Request $request)
    {
        $Specialites = new specialite();
        $form = $this->createForm(specialiteType::class, $Specialites);
        if ($request->isMethod('POST')&& $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()
            ->getManager();
            $em->persist($Specialites);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info','La specialité a bien été enregistrée');
            return $this->redirectToRoute('gsb_praticien_listeSpecialites');            
        }
        return $this->render('GSBPraticienBundle:FormAjoutSpec:FormAjoutSpec.html.twig', array('form' => $form->createView()));
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

    public function ListeSpecialitesAction()
    {
        $listeSpecialites = 
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:specialite')
        ->findAll();
        return $this->render('GSBPraticienBundle:Specialites:specialite.html.twig', array('listeSpecialites' => $listeSpecialites ));
    }
    public function ListeTypePraticiensAction()
    {
        $listeTypePraticiens =
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:type_praticien')
        ->findAll();
        return $this->render('GSBPraticienBundle:TypePraticiens:TypePraticiens.html.twig', array('listeTypePraticiens' => $listeTypePraticiens ));
    }

    public function DeleteTypePraticiensAction(){
        $supprTypePraticiens =
        $this->getDoctrine()
        ->getManager();
        
    }
    
}
