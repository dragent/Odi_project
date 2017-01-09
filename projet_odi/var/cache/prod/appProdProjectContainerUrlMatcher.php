<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // listProduit
        if (0 === strpos($pathinfo, '/produits/list') && preg_match('#^/produits/list(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',  '_format' => 'html',));
        }

        if (0 === strpos($pathinfo, '/client')) {
            // panier_client
            if ($pathinfo === '/client/panier') {
                return array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::indexAction',  '_route' => 'panier_client',);
            }

            // creation_panier_client
            if ($pathinfo === '/client/creation_panier') {
                return array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::newPanierAction',  '_route' => 'creation_panier_client',);
            }

            // ajout_dans_panier_client
            if (0 === strpos($pathinfo, '/client/ajout_panier') && preg_match('#^/client/ajout_panier/(?P<id_panier>[^/]++)/(?P<ref>[^/]++)/(?P<qtt>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout_dans_panier_client')), array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::addToPanierAction',));
            }

            // liste_paniers_client
            if ($pathinfo === '/client/liste_paniers') {
                return array (  '_controller' => 'AppBundle\\Controller\\ListePaniersController::listPaniersAction',  '_route' => 'liste_paniers_client',);
            }

            // contenu_panier_client
            if (0 === strpos($pathinfo, '/client/panier') && preg_match('#^/client/panier/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenu_panier_client')), array (  '_controller' => 'AppBundle\\Controller\\ListePaniersController::viewPanierAction',));
            }

            // delete_panier_client
            if (0 === strpos($pathinfo, '/client/delete_panier') && preg_match('#^/client/delete_panier/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_panier_client')), array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::delPanierAction',));
            }

            // validate_panier_client
            if (0 === strpos($pathinfo, '/client/validate_panier') && preg_match('#^/client/validate_panier/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validate_panier_client')), array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::validatePanierAction',));
            }

        }

        if (0 === strpos($pathinfo, '/magasinier')) {
            // liste_paniers_magasinier
            if ($pathinfo === '/magasinier/liste_paniers') {
                return array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::listPaniersAction',  '_route' => 'liste_paniers_magasinier',);
            }

            // gestion_panier_magasinier
            if (0 === strpos($pathinfo, '/magasinier/gestion_panier') && preg_match('#^/magasinier/gestion_panier/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_panier_magasinier')), array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierAction',));
            }

            // gestion_panier_produit_magasinier
            if (0 === strpos($pathinfo, '/magasinier/produit_gestion_panier') && preg_match('#^/magasinier/produit_gestion_panier/(?P<id_panier>[^/]++)/(?P<ref>[^/]++)/(?P<qtt>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_panier_produit_magasinier')), array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierProduitAction',));
            }

            // gestion_panier_valider_magasinier
            if (0 === strpos($pathinfo, '/magasinier/valider_gestion_panier') && preg_match('#^/magasinier/valider_gestion_panier/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_panier_valider_magasinier')), array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierValiderAction',));
            }

            if (0 === strpos($pathinfo, '/magasinier/produits/list')) {
                // listMagasinierProduit
                if ($pathinfo === '/magasinier/produits/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listMagasinierProduitAction',  '_route' => 'listMagasinierProduit',);
                }

                // listStockProduit
                if (0 === strpos($pathinfo, '/magasinier/produits/list/stock') && preg_match('#^/magasinier/produits/list/stock(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listStockProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listStocksProduitAction',  '_format' => 'html',));
                }

            }

            // listAlerte
            if ($pathinfo === '/magasinier/alertes/list') {
                return array('_route' => 'listAlerte');
            }

            if (0 === strpos($pathinfo, '/magasinier/produits')) {
                if (0 === strpos($pathinfo, '/magasinier/produits/update')) {
                    // updateProduit
                    if (preg_match('#^/magasinier/produits/update/(?P<numero>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::updateProduitAction',));
                    }

                    // updateStock
                    if (0 === strpos($pathinfo, '/magasinier/produits/update/stock') && preg_match('#^/magasinier/produits/update/stock/(?P<numero>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateStock')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::updateStockProduitAction',));
                    }

                }

                // ajoutProduit
                if ($pathinfo === '/magasinier/produits/ajout') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::addProduitAction',  '_route' => 'ajoutProduit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/personne')) {
            // affichePersonne
            if ($pathinfo === '/personne/list') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::indexAction',  '_route' => 'affichePersonne',);
            }

            // montrePersonne
            if ($pathinfo === '/personne/show') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::showAction',  '_route' => 'montrePersonne',);
            }

            // personne_new
            if ($pathinfo === '/personne/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::newAction',  '_route' => 'personne_new',);
            }

        }

        // identification
        if ($pathinfo === '/identification') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::identificationAction',  '_route' => 'identification',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
