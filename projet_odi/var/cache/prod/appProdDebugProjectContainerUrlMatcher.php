<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // liste_produits
        if ($pathinfo === '/produits/liste_produits') {
            return array (  '_controller' => 'AppBundle\\Controller\\ListeProduitsController::listAction',  '_route' => 'liste_produits',);
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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
