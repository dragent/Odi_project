<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Panier;
use AppBundle\Entity\Contenir;
use AppBundle\Entity\Produit;

class ListePaniersController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function listPaniersAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		
		//on cherche tout les paniers du client
		$paniers = $em->getRepository(Panier::class)->findBy(array('id_personne' => '1'));
		
		
		return $this->render('client/liste_paniers_client.twig',['Panier' => $paniers]);
	}
	
	public function viewPanierAction(Request $request,$id_panier)
	{
		$em = $this->getDoctrine()->getManager();
	
		//on cherche tout les contenus du panier : id_panier
		$contenir = $em->getRepository(Contenir::class)->findBy(array('id_panier' => $id_panier));
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		$produit = $em->getRepository(Produit::class)->findAll();
	
		return $this->render('client/contenu_panier_client.twig',['Contenir' => $contenir, 'Panier' => $panier, 'Produit' => $produit]);
	}

}