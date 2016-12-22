<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Produit;

class ListeProduitsController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function testAction(Request $request)
	{
		// replace this example code with whatever you need
		return $this->render('produits/liste_produits.twig');
	}
	
	
	
	public function listAction()
	{
		$em = $this->getDoctrine()->getManager();
		$produit = $em->getRepository(Produit::class)->findAll();
		
		return $this->render('produits/liste_produits.twig', ['Produit' => $produit]);
	}
	
	
}