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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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
