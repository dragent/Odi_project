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
