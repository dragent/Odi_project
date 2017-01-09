<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
            // listeClientProduit
            if (0 === strpos($pathinfo, '/client/produits/liste') && preg_match('#^/client/produits/liste(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listeClientProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listClientProduitAction',  '_format' => 'html',));
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
