<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use AppBundle\Entity\Panier;
use AppBundle\Entity\Produit;
use AppBundle\Entity\Personne;
use AppBundle\Entity\Contenir;

class CreationPanierController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		return $this->render('client/creation_panier_client.twig');
	}
	
	public function newPanierAction(Request $request)
	{
		$panierEnCours = false;
		
		$em = $this->getDoctrine()->getManager();
		
		//on cherche tout les panier de l'utilisateur et on regarde si un est en cours
		$paniers = $em->getRepository(Panier::class)->findBy(array('id_personne' => '1'));
		foreach ($paniers as $value){
			if($value->getEtatPanier() == 1){
				$panierEnCours = true;
				$panier = $value;
				break;
			}
		}
		
		//si pas de panier en cours, on le cree
		if($panierEnCours == false){
			//$personne contient le client actuel (donc ligne a changer)
			$personne = $em->getRepository(Personne::class)->findOneBy(array('id_personne' => '1'));
			
			//on cree un nouveau panier et on remplit ses attributs
			$panier = new Panier();
			$panier->setEtatPanier(1);
			$panier->setIdPersonne($personne);
			$date = new \DateTime('now');
			$panier->setDatePanier($date);
			
			// enregistrer les donnees dans la base
			$em->persist($panier);
			$em->flush();
		}
		
		//liste des produits
		$produit = $em->getRepository(Produit::class)->findAll();
		//istes des produits du panier
		$contenir = $em->getRepository(Contenir::class)->findBy(array('id_panier' => $panier->getIdPanier()));

		return $this->render('client/achat_client.twig',['Panier' => $panier, 'Produit' => $produit, 'Contenir' => $contenir]);
	}
	
	public function addToPanierAction(Request $request, $ref, $id_panier, $qtt){
		$em = $this->getDoctrine()->getManager();
		
		//on cherche si deja present dans le panier
		$dejaContenu = $em->getRepository(Contenir::class)->findOneBy(array('id_panier' => $id_panier, 'ref_produit' => $ref));
		
		//si non on cree un nouveau contenu, sinon on modifie la qtt
		if($dejaContenu == null){
			//on cree un nouveau "contenu" et on remplit ses attributs
			$contenir = new Contenir();
			$contenir->setIdPanier($id_panier);
			$contenir->setRefProduit($ref);
			$contenir->setQuantiteProduit($qtt);
			$date = new \DateTime('now');
			$contenir->setDatePanier($date);
		}
		else{
			$contenir = $dejaContenu;
			$qttFinale = $qtt + $contenir->getQuantiteProduit();
			$contenir->setQuantiteProduit($qttFinale);
		}
		
		
		// enregistrer les donnees dans la base
		$em->persist($contenir);
		$em->flush();
		
		
		$contenir = $em->getRepository(Contenir::class)->findBy(array('id_panier' => $id_panier));
		$produit = $em->getRepository(Produit::class)->findAll();
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		
		return $this->render('client/achat_client.twig',['Panier' => $panier, 'Produit' => $produit, 'Contenir' => $contenir]);
	}
	
	public function delPanierAction(Request $request, $id_panier){
		$em = $this->getDoctrine()->getManager();
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		$em->remove($panier);
		$em->flush();
		return $this->render('client/creation_panier_client.twig');
	}
	
	public function validatePanierAction(Request $request, $id_panier){
		$em = $this->getDoctrine()->getManager();
		$panier = $em->getRepository(Panier::class)->findOneBy(array('id_panier' => $id_panier));
		$panier->setEtatPanier(2);//1=encours 2=valide
		$em->flush();
		
		//on cherche tout les paniers du client
		$paniers = $em->getRepository(Panier::class)->findBy(array('id_personne' => '1'));
		
		return $this->render('client/liste_paniers_client.twig',['Panier' => $paniers]);
	}
	

}
