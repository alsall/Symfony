<?php
namespace Pnpc\Bundle\TortueHermannBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Pnpc\Bundle\TortueHermannBundle\Entity\Infos;
use Pnpc\Bundle\ScopsBundle\Entity\Documents;
use Pnpc\Bundle\ScopsBundle\Entity\Galerie;

use Pnpc\Bundle\TortueHermannBundle\Form\InfosType;
use Pnpc\Bundle\ScopsBundle\Form\ModifierType;
use Pnpc\Bundle\ScopsBundle\Form\RequeteType;

use Symfony\Component\Form\Form;

use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use JMS\SecurityExtraBundle\Annotation\Secure;

class TortueHermannController extends Controller
{

    	public function indexAction()
    	{
    		$shortname = 'TortueHermann';
        	return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':index.html.twig');
    	}
	
	/**
 	 * @Secure(roles="ROLE_ADMIN")
 	 */
     	public function ajouterAction()
		{
		$shortname = 'TortueHermann';
		//pour la redirection -> reprise de la partie voirAtion();
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('Pnpc'.$shortname.'Bundle:Infos')
					 ->VoirTout();
		
		/*if (!$liste) 
		{
			throw $this->createNotFoundException('Oups votre base de données est vide!!! ');
		}*/
		foreach($liste as $info)
		{
		}// fin de reprise
		
		//creation de l'objet Info qui contient toutes les informations d'un baguage
		$infos = new Infos();
		
		//creation du Formbuilder
		$formBuilder = $this->createForm(new InfosType, $infos);
		
		//ajout des donnees
		//$formBuilder

		$formulaire = $formBuilder; //-> getForm();
		
		$requete = $this->get('request');
		if ($requete->getMethod() =='POST')
		{
			$formulaire->bind($requete);
			if ($formulaire->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($infos);
				$em->flush();
				return $this->redirect($this->generateUrl('pnpc_scops_voir', array('info' => $info, 'liste'=>$liste)));
			}
		}
	
		//affichage du formulaire
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':ajouter.html.twig', array('form' => $formulaire->createView(),));
			
	}
	
	public function voirAction()
	{
		$shortname = 'TortueHermann';
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('Pnpc'.$shortname.'Bundle:Infos')
					 ->VoirTout();
		
		if (!$liste) 
		{
        		//throw $this->createNotFoundException('Oups votre base de données est vide!!! ');
				return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':notfound.html.twig');
		}
		
		foreach($liste as $info)
		{
		
		}
		////////////////////PAGINATION//////////
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate( 
			$liste,
			$this->get('request')->query->get('page',1),
			100
		);
		//////////////END/////////////////
		
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':voir.html.twig', array('info' => $info,'pagination'=>$pagination));
		
	}
	
	public function voirplusAction($id)
	{
		$shortname = 'TortueHermann';
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('Pnpc'.$shortname.'Bundle:Infos')
					 ->VoirUn($id);
		
		if (!$liste) 
		{
        		throw $this->createNotFoundException('Oups votre base de données est vide!!! ');
		}
		
		foreach($liste as $info)
		{
		
		}
		
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':voirplus.html.twig', array('info' => $info));
		
	}

	public function modifierAction($id)
	{	
	$shortname = 'TortueHermann';
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('Pnpc'.$shortname.'Bundle:Infos')
					 ->VoirUn($id);
		
		if (!$liste) 
		{
			throw $this->createNotFoundException('Oups votre base de données est vide!!! ');
		}
		foreach($liste as $info)
		{
		}// fin de reprise
		
		//creation de l'objet Info qui contient toutes les informations d'un baguage
		
		
		//creation du Formbuilder
		$formBuilder = $this->createForm(new InfosType, $info);

		$formulaire = $formBuilder; //-> getForm();
		
		$requete = $this->get('request');
		if ($requete->getMethod() =='POST')
		{
			$formulaire->bind($requete);
			if ($formulaire->isValid())
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($info);
				$em->flush();
				return $this->redirect($this->generateUrl('pnpc_scops_voirplus', array('info' => $info, 'liste'=>$liste,'id'=>$id)));
			}
		}
		
		//affichage du formulaire
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':ajouter.html.twig', array('info'=>$info,'form' => $formulaire->createView(),));
			
	}
	
	public function supprimerAction(Infos $info)
	{
		$shortname = 'TortueHermann';
		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		$form = $this->createFormBuilder()->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) { // Ici, isValid ne vérifie donc que le CSRF
			
				$em = $this->getDoctrine()->getManager();
				$em->remove($info);
				$em->flush();

			// Puis on redirige vers la liste des baguages
				return $this->redirect($this->generateUrl('pnpc_scops_voir'));
			}
		}

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':supprimer.html.twig', array('info' => $info, 'form' => $form->createView()));
		
	}
	
	public function supprimerdocAction(Documents $documents)
	{
	$shortname = 'TortueHermann';
		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'article contre cette faille
		$form = $this->createFormBuilder()->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) { // Ici, isValid ne vérifie donc que le CSRF
			// On supprime l'article
				$em = $this->getDoctrine()->getManager();
				$em->remove($documents);
				$em->flush();

			// On définit un message flash
				$this->get('session')->getFlashBag()->add('documents', 'Article bien supprimé');

			// Puis on redirige vers l'accueil
				return $this->redirect($this->generateUrl('pnpc_scops_doc'));
			}
		}

    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':supprimerdoc.html.twig', array('documents' => $documents, 'form' => $form->createView()));
		
	}
	
	public function docAction()
	{
	$shortname = 'TortueHermann';
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('PnpcScopsBundle:Documents')
					 ->findAll();
		
		// if (!$liste) 
		// {
  //        		throw $this->createNotFoundException('Oups votre base de données est vide!!! ');
				
		// }
		
		foreach($liste as $documents)
		{
		
		}
		
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':doc.html.twig', array('documents'=>$documents, 'liste'=>$liste));//,'contact'=>$contact,'baguage'=>$baguage,'gestion'=>$gestion));
	}

	
	public function uploadAction(Request $request)
	{
	$shortname = 'TortueHermann';
		$document = new Documents();
		$form = $this->createFormBuilder($document)
			->add('name')
			->add('type','choice', array('choices' =>array('baguage'=>'Baguage','gestion'=>'Administratifs','contact'=>'Collaborateurs')))
			->add('format','choice',array('choices'=>array('excel'=>'Excel','pdf'=>'Pdf','word'=>'Word Office','powerpoint'=>'Powerpoint','image'=>'Image')))
			->add('file')
			->getForm();
			
		$form->handleRequest($request);

		if ($form->isValid()) {
        		$em = $this->getDoctrine()->getManager();
			$document->upload();
			$em->persist($document);
		        $em->flush();

        		return $this->redirect($this->generateUrl('pnpc_scops_doc'));
    		}

    		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':upload.html.twig', array('form' => $form->createView()));
		
	}
	
	public function photoAction()
	{
	$shortname = 'TortueHermann';
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('PnpcScopsBundle:Galerie')
					 ->findAll();
					 
	
		if (!$liste) 
		{
         		throw $this->createNotFoundException('Oups votre base de données est vide!!! ');
		}
		
		foreach($liste as $galerie)
		{
		
		}
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':diapo.html.twig', array('galerie'=>$galerie, 'liste'=>$liste));;
	}
	
	public function uploadImageAction(Request $request)
	{
	$shortname = 'TortueHermann';
		$document = new Galerie();
		$form = $this->createFormBuilder($document)
			->add('nom')
			->add('auteur')
			->add('commentaire')
			->add('file')
			->getForm();
			
		$form->handleRequest($request);

		if ($form->isValid()) {
        		$em = $this->getDoctrine()->getManager();
		        $document->upload();
			$em->persist($document);
        		$em->flush();

        		return $this->redirect($this->generateUrl('pnpc_scops_diapo'));
    		}

    		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':upload.html.twig', array('form' => $form->createView()));
		
	}
	
	public function requeteAction(Request $request)
	{
	$shortname = 'TortueHermann';
		$mot=$_POST['mot'];
		$champ=$_POST['champ'];
		$liste = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('Pnpc'.$shortname.'Bundle:Infos')
					 ->recherche($champ,$mot);
		
		if (!$liste) 
		{
        		throw $this->createNotFoundException('Aucun résultat trouvé');
		}
		
		foreach($liste as $info)
		{
		
		}
		////////////////////PAGINATION//////////
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate( 
			$liste,
			$this->get('request')->query->get('page',1),
			50
		);
		//////////////END/////////////////
		
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':voir.html.twig', array('info' => $info,'pagination'=>$pagination));
		}
		
	public function searchformAction()
	{
	$shortname = 'TortueHermann';
		$form = $this->createForm(new RequeteType);
		return $this->render('Pnpc'.$shortname.'Bundle:'.$shortname.':request_form.html.twig',array('form' => $form->createView()));
	}
	
}
