<?php
namespace AppBundle\Controller;

use AppBundle\Form\Type\ProduitType;
use AppBundle\Form\Type\ProduitsInfosType;
use AppBundle\Form\Type\ProduitsStocksType;

use AppBundle\Entity\Produit;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller{

    public function listProduitAction($message, $_format) {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findList();

        return $this->render('produits/list.'.$_format.'.twig', ['produits' => $produits, 'msg' => $message]);
    }

    public function listMagasinierProduitAction($message) {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findList();

        return $this->render('magasinier/liste_magasinier.html.twig', ['produits' => $produits, 'msg' => $message]);
    }

    public function listStocksProduitAction($message, $_format) {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository(Produit::class)->findList();

        return $this->render('magasinier/stocks.'.$_format.'.twig', ['produits' => $produits, 'msg' => $message]);
    }

    public function addProduitAction(Request $request) {

        // creer le formulaire
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit, ["method" => 'POST']);

        return $this->handleForm($form, $produit, $request, "Ajout", "Ajouter un produit");
    }

    public function updateProduitAction(Request $request, $numero) {

        $em = $this->getDoctrine()->getManager();
        // recup en utilisant les 2 colonnes de la cle primaire
        $produit = $em->getRepository(Produit::class)->find($numero);
        $form = $this->createForm(ProduitsInfosType::class, $produit, ["method" => 'POST']);

        return $this->handleForm($form, $produit, $request, "Modification", "Modifier un produit");
    }

    public function updateStockProduitAction(Request $request, $numero) {

        $em = $this->getDoctrine()->getManager();
        // recup en utilisant les 2 colonnes de la cle primaire
        $produit = $em->getRepository(Produit::class)->find($numero);
        $form = $this->createForm(ProduitsStocksType::class, $produit, ["method" => 'POST']);

        return $this->handleForm($form, $produit, $request, "Modif. Stocks", "Modifier le stock d'un produit");
    }

    private function handleForm($form, Produit $produit, Request $request, $titreOnglet, $titre) {
        // Récupérer les données du form quand il est soumis
        $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
            // enregistrer les donnees dans la base
            $produit = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            // rediriger vers accueil avec un message de succes
            return $this->redirectToRoute('listMagasinierProduit');
         }
        // formulaire non valide ou 1er acces : afficher le formulaire
        return $this->render('magasinier/form.twig',
                             array('form'=> $form->createView(), 'titreOnglet' => $titreOnglet, 'titre' => $titre)) ;
    }
}
