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

        // listeProduit
        if (0 === strpos($pathinfo, '/produits/liste') && preg_match('#^/produits/liste(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',  '_format' => 'html',));
        }

        if (0 === strpos($pathinfo, '/client/p')) {
            // listeProduitClient
            if (0 === strpos($pathinfo, '/client/produits/liste') && preg_match('#^/client/produits/liste(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeProduitClient')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listClientProduitAction',  '_format' => 'html',));
            }

            if (0 === strpos($pathinfo, '/client/paniers')) {
                // panierClient
                if ($pathinfo === '/client/paniers') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::indexAction',  '_route' => 'panierClient',);
                }

                // creationPanierClient
                if ($pathinfo === '/client/paniers/creation') {
                    return array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::newPanierAction',  '_route' => 'creationPanierClient',);
                }

                // ajoutPanierClient
                if (0 === strpos($pathinfo, '/client/paniers/ajout') && preg_match('#^/client/paniers/ajout/(?P<id_panier>[^/]++)/(?P<ref>[^/]++)/(?P<qtt>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutPanierClient')), array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::addToPanierAction',));
                }

                // listePaniersClient
                if ($pathinfo === '/client/paniers/liste') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ListePaniersController::listPaniersAction',  '_route' => 'listePaniersClient',);
                }

                // contenuPanierClient
                if (preg_match('#^/client/paniers/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenuPanierClient')), array (  '_controller' => 'AppBundle\\Controller\\ListePaniersController::viewPanierAction',));
                }

                // suppressionPanierClient
                if (0 === strpos($pathinfo, '/client/paniers/supprimer') && preg_match('#^/client/paniers/supprimer/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppressionPanierClient')), array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::delPanierAction',));
                }

                // validationPanierClient
                if (0 === strpos($pathinfo, '/client/paniers/valider') && preg_match('#^/client/paniers/valider/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationPanierClient')), array (  '_controller' => 'AppBundle\\Controller\\CreationPanierController::validatePanierAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/magasinier')) {
            if (0 === strpos($pathinfo, '/magasinier/p')) {
                if (0 === strpos($pathinfo, '/magasinier/paniers')) {
                    // listePaniersMagasinier
                    if ($pathinfo === '/magasinier/paniers/liste') {
                        return array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::listPaniersAction',  '_route' => 'listePaniersMagasinier',);
                    }

                    if (0 === strpos($pathinfo, '/magasinier/paniers/gestion')) {
                        // gestionPanierMagasinier
                        if (preg_match('#^/magasinier/paniers/gestion/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionPanierMagasinier')), array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierAction',));
                        }

                        // gestionPanierProduitMagasinier
                        if (0 === strpos($pathinfo, '/magasinier/paniers/gestion/produits') && preg_match('#^/magasinier/paniers/gestion/produits/(?P<id_panier>[^/]++)/(?P<ref>[^/]++)/(?P<qtt>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionPanierProduitMagasinier')), array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierProduitAction',));
                        }

                        // gestionPanierValidationMagasinier
                        if (0 === strpos($pathinfo, '/magasinier/paniers/gestion/validation') && preg_match('#^/magasinier/paniers/gestion/validation/(?P<id_panier>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestionPanierValidationMagasinier')), array (  '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierValiderAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/magasinier/produits/liste')) {
                    // listeMagasinierProduit
                    if ($pathinfo === '/magasinier/produits/liste') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listMagasinierProduitAction',  '_route' => 'listeMagasinierProduit',);
                    }

                    // listeStocksProduit
                    if (0 === strpos($pathinfo, '/magasinier/produits/liste/stocks') && preg_match('#^/magasinier/produits/liste/stocks(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeStocksProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listStocksProduitAction',  '_format' => 'html',));
                    }

                }

            }

            // listeAlerte
            if ($pathinfo === '/magasinier/alertes/liste') {
                return array('_route' => 'listeAlerte');
            }

            if (0 === strpos($pathinfo, '/magasinier/produits')) {
                if (0 === strpos($pathinfo, '/magasinier/produits/update')) {
                    // updateProduit
                    if (preg_match('#^/magasinier/produits/update/(?P<numero>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::updateProduitAction',));
                    }

                    // updateStock
                    if (0 === strpos($pathinfo, '/magasinier/produits/update/stocks') && preg_match('#^/magasinier/produits/update/stocks/(?P<numero>[^/]++)$#s', $pathinfo, $matches)) {
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
            if ($pathinfo === '/personne/liste') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::indexAction',  '_route' => 'affichePersonne',);
            }

            // montrePersonne
            if ($pathinfo === '/personne/profil') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::showAction',  '_route' => 'montrePersonne',);
            }

            // creationPersonne
            if ($pathinfo === '/personne/creation') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::newAction',  '_route' => 'creationPersonne',);
            }

        }

        // identification
        if ($pathinfo === '/identification') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::identificationAction',  '_route' => 'identification',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
