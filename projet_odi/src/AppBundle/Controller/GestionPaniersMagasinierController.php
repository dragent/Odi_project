<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Panier;
use AppBundle\Entity\Contenir;
use AppBundle\Entity\Produit; 

class GestionPaniersMagasinierController extends Controller 
{
	public function listPaniersAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		
		//on cherche tout les paniers du valides par les clients 
		$paniers = $em->getRepository(Panier::class)->findBy(array('etat_panier' => '2'));
		
		return $this->render('magasinier/liste_paniers_magasinier.twig',['Panier' => $paniers]);
	}
	
	public function gestionPanierAction(Request $request,$id_panier)
	{
		$em = $this->getDoctrine()->getManager();
	
		//on cherche tout les contenus du panier : id_panier
		$contenir = $em->getRepository(Contenir::class)->findBy(array('id_panier' => $id_panier));
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		$produit = $em->getRepository(Produit::class)->findAll();
	
		return $this->render('magasinier/gestion_panier_magasinier.twig',['Contenir' => $contenir, 'Panier' => $panier, 'Produit' => $produit]);
	}
	
	
	public function gestionPanierProduitAction(Request $request, $ref, $id_panier, $qtt){
		$em = $this->getDoctrine()->getManager();
		
		//on recupere le produit et l'objet contenir
		$contenir = $em->getRepository(Contenir::class)->findOneBy(array('id_panier' => $id_panier, 'ref_produit' => $ref));
		$produit = $em->getRepository(produit::class)->findOneBy(array('ref_produit' => $ref));
		
		//on modifie les qtt 
		$qttContenir= $contenir->getQuantiteProduitGeree() + $qtt;
		$contenir->setQuantiteProduitGeree($qttContenir);
		
		$qttProduit = $produit->getQuantiteProduit() - $qtt;
		$produit->setQuantiteProduit($qttProduit);

		$em->persist($contenir);
		$em->persist($produit);
		$em->flush();
		
		//on recharge les variables pour les envoyer a la vue
		$contenir = $em->getRepository(Contenir::class)->findBy(array('id_panier' => $id_panier));
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		$produit = $em->getRepository(Produit::class)->findAll();
		
		return $this->render('magasinier/gestion_panier_magasinier.twig',['Contenir' => $contenir, 'Panier' => $panier, 'Produit' => $produit]);
	}
	
	public function gestionPanierValiderAction(Request $request, $id_panier){
		$em = $this->getDoctrine()->getManager();
		
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		$panier->setEtatPanier(3);//1=encours 2=validé par client 3=traité
		$em->persist($panier);
		$em->flush();
		
		//on retourne a la liste de paniers a gerer
		$paniers = $em->getRepository(Panier::class)->findBy(array('etat_panier' => '2'));
		
		return $this->render('magasinier/liste_paniers_magasinier.twig',['Panier' => $paniers]);
	}

}