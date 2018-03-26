<?php

namespace GSB\PraticienBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GSB\PraticienBundle\Entity\type_praticien;
use GSB\PraticienBundle\Form\type_praticienType;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('GSBPraticienBundle:Home:home.html.twig');
    }

    public function FormAjoutTypePraticiensAction(Request $request)
    {
        $TypePraticiens = new type_praticien();
        $form = $this->createForm(type_praticienType::class, $TypePraticiens);
        if ($request->isMethod('POST')&& $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()
            ->getManager();
            $em->persist($TypePraticiens);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info','type praticien bien enregistré');
            return $this->redirectToRoute('gsb_praticien_listeTypePraticiens');            
        }
        return $this->render('GSBPraticienBundle:FormAjoutTypePraticiens:FormAjoutTypePraticiens.html.twig', array('form' => $form->createView()));
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

    // public function FormAjoutTypePraticiensAction() {


    //     $FormAjoutTypePraticiens = new ResultSetMapping();
    //     $query = $this->_em->createNativeQuery('INSERT INTO type_praticien SET Typ_Libelle = ?');
    //     $query->setParameter(1, $items);
    //     $result = $query->getResult();
    // }
}
