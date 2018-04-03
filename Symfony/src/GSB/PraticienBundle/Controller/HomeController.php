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

        //***ListePraticiens****
    public function ListePraticiensAction()
    {
        $listePraticiens = 
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:praticien')
        ->findAll();
        return $this->render('GSBPraticienBundle:Praticiens:praticiens.html.twig', array('listePraticiens' => $listePraticiens ));
    }

        //***ListeSpecialites****
    public function ListeSpecialitesAction()
    {
        $listeSpecialites = 
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:specialite')
        ->findAll();
        return $this->render('GSBPraticienBundle:Specialites:specialite.html.twig', array('listeSpecialites' => $listeSpecialites ));
    }

        //***ListeTypePraticiens****
    public function ListeTypePraticiensAction()
    {
        $listeTypePraticiens =
        $this->getDoctrine()
        ->getManager()
        ->getRepository('GSBPraticienBundle:type_praticien')
        ->findAll();
        return $this->render('GSBPraticienBundle:TypePraticiens:TypePraticiens.html.twig', array('listeTypePraticiens' => $listeTypePraticiens ));
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

        //***ModifPraticiens****
    public function FormModifPraticiensAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();

        $Praticiens = $em->getRepository('GSBPraticienBundle:praticien')->find($id);
        $form=$this->createForm(praticienType::class,$Praticiens);
      
        if($request->getMethod()=='POST'){
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->flush();
            }
        }
        return $this->render('GSBPraticienBundle:FormModifPraticiens:FormModifPraticiens.html.twig', array(
            'form'=>$form->createView()
        ));
    }

        //***ModifSpecialites****
    public function FormModifSpecialitesAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();

        $Specialites = $em->getRepository('GSBPraticienBundle:specialite')->find($id);
        $form=$this->createForm(specialiteType::class,$Specialites);
        
        if($request->getMethod()=='POST'){
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em->flush();
            }
        }
        return $this->render('GSBPraticienBundle:FormModifSpecialites:FormModifSpecialites.html.twig', array(
            'form'=>$form->createView()
        ));
    }

        //***ModifTypePraticiens****
    public function FormModifTypePraticiensAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();

        $TypePraticiens = $em->getRepository('GSBPraticienBundle:type_praticien')->find($id);
        $form=$this->createForm(type_praticienType::class,$TypePraticiens);        

        if($request->getMethod()=='POST'){
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em->flush();
            }
        }

        return $this->render('GSBPraticienBundle:FormModifTypePraticiens:FormModifTypePraticiens.html.twig', array(
            'form'=>$form->createView()
        ));
    }

        //***DeletePraticien****

     public function DeletePraticienAction($id){
        $supprPraticien =
        $this->getDoctrine()
        ->getManager();
        $identificator = $supprPraticien-> getRepository('GSBPraticienBundle:praticien')->find($id);
        $supprPraticien -> remove($identificator);
        $supprPraticien -> flush();

        return $this->redirectToroute('gsb_praticien_listePraticiens');
    }

         //***DeleteSpecialite****

    public function DeleteSpecialiteAction($id){
        $supprSpecialite =
        $this->getDoctrine()
        ->getManager();
        $identificator = $supprSpecialite-> getRepository('GSBPraticienBundle:specialite')->find($id);
        $supprSpecialite -> remove($identificator);
        $supprSpecialite -> flush();

        return $this->redirectToroute('gsb_praticien_listeSpecialites');
    }

         //***DeleteTypePraticiens****
    public function DeleteTypePraticiensAction($id){
        $supprTypePraticiens =
        $this->getDoctrine()
        ->getManager();
        $identificator = $supprTypePraticiens-> getRepository('GSBPraticienBundle:type_praticien')->find($id);
        $supprTypePraticiens -> remove($identificator);
        $supprTypePraticiens -> flush();

        return $this->redirectToroute('gsb_praticien_listeTypePraticiens');
    }
}
